<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'BUOU') }}</title>
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Style -->
        <style>
             .navig{
                margin-top:2.5%;
                padding-bottom:0;
                height:100%;
                position: relative;
                width:20%;
                float:left;
                margin-right:1%;
            }
            #Add{
             
                float:center;
                margin:2%;
                margin-top:0;
                padding:5%;
            }
            label, input {
                display: block;
            }

            label {
                margin-bottom: 20px;
            }
            h1{
                font-size: 20px;
            }

        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                @include('layouts.sidebar')
                
                <div class="py-12">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" id ="Add">
                        @if(Session::get('success'))
                          
                            <alertalert-success>
                                {{Session::get('success')}}
                            </alertalert-success>
                          
                        @endif

                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                    <h1>  Add Records </h1>
                        <div class="p-6 bg-white">

                            <form action = "create" method = "post" class="py-3">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                                <label id="label">Date:
                                    <input type="date" name= "Date" value="{{ old ('Date')}}">
                                    <span style="color:red">@error('Date'){{$message}} @enderror</span>
                                </label>
     
                                <label id="label">Title:
                                    <input type ="text" name ="Title" value="{{ old ('Title')}}">
                                    <span style="color:red">@error('Title'){{$message}} @enderror</span>
                                </label>

                                <label id="label">Researchers Name:
                                    <input type ="text" name ="Research_Name" value="{{ old ('Research_Name')}}">
                                    <span style="color:red">@error('Researchers Name'){{$message}} @enderror</span>
                                </label>
       
                                <label id="label">Partner Agency:
                                    <input type ="text" name ="Partner_Agency" value="{{ old ('Partner_Agency')}}">
                                    <span style="color:red">@error('Partner Agency'){{$message}} @enderror</span>
                                </label>
                                

                                <label id="label">Designation:
                                    <input type ="text" name="Designation" value="{{ old ('Designation')}}">
                                    <span style="color:red">@error('Designation'){{$message}} @enderror</span>
                                </label>

                                <label id="label">Start Date:
                                    <input type="date" name="Start_Date" value="{{ old ('Start_Date')}}">
                                    <span style="color:red">@error('Start Date'){{$message}} @enderror</span>
                                </label>

                                <label id="label">Target Date:
                                    <input type="date" name="Target_Date" value="{{ old ('Target_Date')}}">
                                    <span style="color:red">@error('End Date'){{$message}} @enderror</span>
                                </label>

                                <label id="label">CREC
                                    <input type ="text" name="CREC" value="{{ old ('CREC')}}">
                                    <span style="color:red">@error('CREC'){{$message}} @enderror</span>
                                </label>

                                <label id="label">URECOM
                                    <input type ="text" name="URECOM" value="{{ old ('URECOM')}}">
                                    <span style="color:red">@error('URECOM'){{$message}} @enderror</span>
                                </label>

                                <label id="label">Funds
                                    <select name = "Fund" value="{{ old ('Fund')}}">
                                        <option value="Internal"> Internal</option>
                                        <option value="External"> External</option>
                                        <option value="Others"> Others</option>
                                    </select>
                                    <span style="color:red">@error('funds'){{$message}} @enderror</span>
                                </label>

                                <label id="label">Budget
                                    <input type = "number" name="Budget" min="1" step="any" value="{{ old ('Budget')}}">
                                </label>

                                <label id="label">Remarks
                                    <input type = "text" name="Remarks" value="{{ old ('Remarks')}}">
                                </label>

                                <x-button class="ml-3">
                                    Submit
                                </x-button>
                            </form>
                            <a href="/">
                                <x-button class="ml-3 bg-red">
                                    Cancel
                                </x-button>
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
