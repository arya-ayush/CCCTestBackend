<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 28/7/18
 * Time: 10:15 PM
 */

namespace App\Api\V1\Controllers;

use App\Api\V1\Transformers\UserTransformer;
use App\Question;
use App\Response;
use App\Api\V1\Requests\UserResponseRequest;
use App\User;
use Illuminate\Support\Facades\Input;

class UserResponseController extends Controller
{
    private $attempted_count = 0;
    private $score = 0;

    public function store(UserResponseRequest $request)
    {
        $user = new User();
        $user->name = $request->getStudentName();
        $user->gender = $request->getStudentGender();
        $user->branch = $request->getStudentBranch();
        $user->email = $request->getStudentEmail();
        $user->mobile_no = $request->getStudentMobile();
        $student = User::where('student_no', $request->getStudentNo())->first();
        $student_id = User::where('student_no', $request->getStudentNo())->pluck('id');
        $responses = Input::get('all_responses');
        foreach ($responses as $item) {
            $response = new Response();
            if (!$student) {
                $user->student_no = $request->getStudentNo();
                $user->save();
                $student_id = User::where('student_no', $request->getStudentNo())->pluck('id');
            }
            $response->student_id = $student_id[0];
            $response->question_id = $item['question_id'];
            $response->response = $item['response'];
            $response->save();
            $this->score($item['question_id'], $item['response']);
        }
        User::where('id', $student_id[0])->update(array('score' => $this->score));
        return $this->response->error('Submitted Successfully.' . ' Your score is ' . $this->score, 200);
    }

    private function score($question_id, $response)
    {
        $this->attempted_count++;
        $ques = Question::where('id', $question_id)->first();
        $correct = $ques->answer;
        if ($response === $correct)
            $this->score = $this->score + 4;
        else
            $this->score = $this->score - 1;
    }

    public function index()
    {
        $user = User::all()->sortBy('score');
        return $this->response->collection($user, new UserTransformer);
    }


}