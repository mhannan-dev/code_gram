@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-3">
        <img class="rounded-circle" src="logo/Code.jpg" alt="Page Logo">

      </div>
        <div class="col-9 p-3">
          <div class=""><h1>CodeGram</h1></div>
          <div class="d-flex">
            <div class="pr-4"><strong class="pr-1">153</strong>post</div>
            <div class="pr-4"><strong class="pr-1">23k</strong>followers</div>
            <div class="pr-4"><strong class="pr-1">212</strong>following</div>
          </div>

            <div class="pt-3"><h6 class="font-weight-bold">CodeGram</h5></div>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            <div><a href="#" class="font-weight-bold">freecodegram</a></div>

        </div>
    </div>
    <div class="row pt-5">
      <div class="col-4">
        <img src="logo/post_img1.jpg" class="w-100"/>
      </div>
      <div class="col-4">
        <img src="logo/post_img2.jpg" class="w-100"/>
      </div>
      <div class="col-4">
        <img src="logo/post_img3.jpg" class="w-100"/>
      </div>

    </div>
    <div class="row pt-5">
      <div class="col-4">
        <img src="logo/post_img4.jpg" class="w-100"/>
      </div>
      <div class="col-4">
        <img src="logo/post_img5.jpg" class="w-100"/>
      </div>
      <div class="col-4">
        <img src="logo/post_img6.jpg" class="w-100"/>
      </div>

    </div>
</div>
@endsection
