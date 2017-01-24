@extends('layouts.default')

@section('body')
  <section id="header" class="ui text container">
    <h1 class="ui header">SIT Questionnaire</h1>
    <p>Just a Questionnaire Web Application.</p>
  </div>

  <div class="ui section divider container"></div>
  
  <section id="creation" class="ui text container">
    <h3 class="ui header">Create Questionnaire</h3>
    <div class="ui form">
      <form action="/create" method="post">
        {{ csrf_field() }}
        <div class="inline fields">
          <div class="seven wide field">
            <input type="text" name="qtitle" placeholder="Questionnaire Title.." required>
          </div>
          <div class="four wide field">
            <input class="flatpickr" type="text" name="begin_date" placeholder="Begin Date.." required>
          </div>
          <div class="four wide field">
            <input class="flatpickr" type="text" name="end_date" placeholder="End Date.." required>
          </div>
          <div class="three wide field">
            <button type="submit" class="ui animated fade fluid button basic grey" tabindex="0">
              <div class="hidden content">
                <i class="icon plus"></i>
              </div>
              <div class="visible content">Create !</div>
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <div class="ui section divider container"></div>

  <section id="quiestionnaires" class="ui text container">
    <h3 class="ui header">Your Questionnaire</h3>
    @foreach($qs as $q)
    <div class="ui grey clearing segment">
      <h3>
        #{{ $q['qid'] }} {{ $q['qtitle']}}
        <a href="/{{ $q['qid'] }}" class="mini ui button right floated">
          MANAGE
        </a>
      </h3>
      <div class="ui circular labels">
        <a class="ui label">
          Begin: {{ $q['begin_date'] }}
        </a>
        <a class="ui label">
          End: {{ $q['end_date'] }}
        </a>
      </div>
    </div>
  @endforeach

@endsection