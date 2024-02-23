<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{   
    /* 
        Session 컨트롤러 코딩시작.
        3개의 함수(메서드 생성)
        1. 세션을 출력
        2. 세션을 저장하는 함수
        3. 세션을 삭제하는 함수
        순서대로 진행.
    */
    public function getSessionData(Request $request)
    {
        if($request->session()->has('name')){    // has() 사용하면 그 세션이 존재하는 확인이 가능하다 
            echo $request->session()->get('name');
        } else{
            echo '세션이 없습니다.';
        }
    }

    // 2번째 함수store
    public function storeSessionData(Request $request)
    {
        $request->session()->put('name','John'); // $_SESSION['name'] = 'John';   
        echo '세션이 추가 되었습니다.';    
    }

    // 2번째 함수 delete
    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo '세션이 삭제 되었습니다.';
    }
}
