@extends('layouts.default')

@section('body')
  <section id="header" class="ui text container">
    <h1 class="ui header">SIT Questionnaire</h1>
    <p>Just a Questionnaire Web Application.</p>
  </section>

  <div class="ui section divider container"></div>
  
  <section id="creation" class="ui text container">
    <h3 class="ui header">Manage Questions</h3>
    <button class="ui animated fade button basic green create-question-btn" tabindex="0">
      <div class="hidden content">
        <i class="icon plus"></i>
      </div>
      <div class="visible content">Create Question !</div>
    </button>
    <button class="ui animated fade button basic blue create-type-btn" tabindex="0">
      <div class="hidden content">
        <i class="icon plus"></i>
      </div>
      <div class="visible content">Create Types !</div>
    </button>
  </section>

  <div class="ui section divider container"></div>

  <section id="quiestionnaires" class="ui text container">
    <h3 class="ui header">Question</h3>
    @for ($i = 1; $i < 10; $i++)
    <div class="ui grey clearing segment">
      <a class="ui grey left ribbon label">Texts</a>
      <span>Question {{ $i }}</span>
      <div class="ui buttons  mini right floated">
        <a href="#" class="mini ui button">
          Edit
        </a>
        <div class="or"></div>
        <button class="mini ui negative button delete-btn">
          Delete
        </button>
      </div>
    </div>
    @endfor
  </section>

  @include('helper.deleteq')
  @include('helper.create.type')
  @include('helper.create.question')

@endsection