@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="profile" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}'s Profile</div>

                <div class="panel-body">
                    <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                    <p><strong>Job Title:</strong> {{ Auth::user()->title }}</p>
                    <p><strong>Sector:</strong> {{ Auth::user()->sector }}</p>
                    <p><strong>Experience:</strong> {{ Auth::user()->experience }} @if (Auth::user()->experience == 1) year @else years @endif</p>
                    <p><strong>State/Territory:</strong> @if (Auth::user()->state == "vic") Victoria @elseif (Auth::user()->state == "nsw") New South Wales @elseif (Auth::user()->state == "qld") Queensland @elseif (Auth::user()->state == "wa") Western Australia @elseif (Auth::user()->state == "sa") South Australia @elseif (Auth::user()->state == "tas") Tasmania @elseif (Auth::user()->state == "act") Australian Capital Territory @elseif (Auth::user()->state == "nt") Northern Territory @elseif (Auth::user()->state == "oth") Other Australian Region @endif</p>
                    <p><strong>City:</strong> {{ Auth::user()->city }}</p>

                    <hr>

                    <p>
                        <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('edit-form').submit();">
                            Edit profile and skills
                        </button>
                    </p>

                    <p>
                        <button id="change-password" class="btn btn-primary">
                            Change password
                        </button>
                    </p>

                    <p id="change-password-content" style="display: none;">
                        To change your password, Logout and select "Forgot Your Password".
                    </p>

                    <p>
                        <button id="confirm-delete" class="btn btn-primary">
                            Delete account
                        </button>
                    </p>

                    <p id="confirm-delete-content" style="display: none;">
                        Confirm deletion: <a class="text-warning" href="{{ route('delete') }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">I really want to delete my account.</a>
                    </p>

                    <form id="delete-form" action="{{ route('delete') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                    <form id="edit-form" action="{{ route('editProfile') }}" method="GET" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Upload Resume</div>

                <div class="panel-body">
                    <p>Uploading a resume is optional.</p>

                    <form class="form-horizontal" method="POST" action="{{ route('resume') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('resume') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="resume" type="file" class="form-control" name="resume" required>

                                @if ($errors->has('resume'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('resume') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
