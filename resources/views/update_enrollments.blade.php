@extends('layout.app')

@section('content')
    <style>
        button {
            font-family: inherit;
            font-size: 16px;
            background: royalblue;
            color: white;
            padding: 0.7em 1em;
            padding-left: 0.9em;
            display: flex;
            align-items: center;
            border: none;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.2s;
            cursor: pointer;
        }

        button span {
            display: block;
            margin-left: 0.3em;
            transition: all 0.3s ease-in-out;
        }

        button svg {
            display: block;
            transform-origin: center center;
            transition: transform 0.3s ease-in-out;
        }

        button:hover .svg-wrapper {
            animation: fly-1 0.6s ease-in-out infinite alternate;
        }

        button:hover svg {
            transform: translateX(1.2em) rotate(45deg) scale(1.1);
        }

        button:hover span {
            transform: translateX(5em);
        }

        button:active {
            transform: scale(0.95);
        }

        @keyframes fly-1 {
            from {
                transform: translateY(0.1em);
            }

            to {
                transform: translateY(-0.1em);
            }
        }

    </style>

    <div class="card my-4">
        <form action="{{route('saveUpdatedEnrollments')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="update_enrollment_name" value="{{$enrollments->Name}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="Address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="update_address" value="{{$enrollments->Address}}">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="Subject1" class="form-label">Subject1</label>
                        <input type="text" class="form-control" name="update_subject1" value="{{$enrollments->Subject1}}">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="Subject2" class="form-label">Subject2</label>
                        <input type="text" class="form-control" name="update_subject2" value="{{$enrollments->Subject2}}">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="Subject3" class="form-label">Subject3</label>
                        <input type="text" class="form-control" name="update_subject3" value="{{$enrollments->Subject3}}">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="Subject4" class="form-label">Subject1</label>
                        <input type="text" class="form-control" name="update_subject4" value="{{$enrollments->Subject4}}">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="Subject5" class="form-label">Subject1</label>
                        <input type="text" class="form-control" name="update_subject5" value="{{$enrollments->Subject5}}">
                    </div>

                    <div class="col mb-3 d-flex justify-content-center align-items-center">
                        <input type="hidden" name="id" value="{{$enrollments->id}}">
                            <button>
                                <div class="svg-wrapper-1">
                                    <div class="svg-wrapper">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            width="24"
                                            height="24">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path
                                                fill="currentColor"
                                                d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <span>Send</span>
                            </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection