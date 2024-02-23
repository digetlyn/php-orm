<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
   public function getAllPost()
   {
    $posts = DB::table('posts')->get();
    return view('posts',compact('posts'));
   }


   public function addPost()
   {
      return view('add-post');  //여기는 add-post.blade.php  파일을 불러와서 보여준다.
   }


   public function addPostSubmit(Request $request)
   {
      DB::table('posts')->insert([
         'subject'=>$request->subject,
         'content'=>$request->content,
      ]);
      return back()->with('post_created','글이 성공적으로 등록되었습니다.');
   }

   //개별글 보기
   public function getPostById($id)
   {
      $post = DB::table('posts')->where('id',$id)->first();
      return view('single-post', compact('post'));  //['post' => array()]; 랑 같은...기능
   }

   // 수정 form
   public function editPost($id)
   {
      $post= DB::table('posts')->where('id',$id)->first();
      return view('edit-post', compact('post'));
   }


   //수정처리
   public function updatePost(Request $request)
   {
      DB::table('posts')->where('id', $request->id)->update(
         [
            'subject' => $request->subject,
            'content' => $request->content
         ]          
      );
      return back()-> with('post_updated','글 수정이 완료됐습니다.');
   }


   //삭제처리

   public function deletePost($id)
   {
      DB::table('posts')->where('id',$id)->delete();
         return back()->with('post_deleted','글이 삭제되었습니다.');
   }
   

   // join 하는 부분
   public function innerJoinClause()
   {
         $request = DB::table('users')
         ->select('users.name','posts.subject','posts.content','users.email')
         ->join('posts','users.id','=','posts.user_id')
         ->get();        

         print_r($request);
   }




 }