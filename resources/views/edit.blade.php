<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Employee Informations</title>
    <!-- Other head elements -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.steps.js') }}"></script>
    <script src="{{ asset('js/jquery.steps.min.js') }}"></script>
    {{-- jquery validation CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="{{ asset('css/jquery.steps.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    {{-- Bootstrap CSS CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="text-center">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <form id="example-advanced-form" action="{{ url('/update/' . $employee->id) }}" class="form-control" method="post">
        @csrf
        @method('PUT')
        <h3>Personal Information</h3>
        <fieldset>
            <legend>Personal Information</legend>

            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control w-25 @error('name') is-invalid @enderror" id="name"
                    name="name" value="{{ $employee->name }}" placeholder="Enter Your Name">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age <span class="text-danger">*</span></label>
                <input type="number" class="form-control w-25 @error('age') is-invalid @enderror" id="age"
                    name="age" value="{{ $employee->age }}" placeholder="Enter Your Age">
                @error('age')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile <span class="text-danger">*</span></label>
                <input type="number" class="form-control w-25 @error('mobile') is-invalid @enderror" id="mobile"
                    name="mobile" value="{{ $employee->mobile }}" placeholder="Enter Your Mobile Number">
                @error('mobile')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nid" class="form-label">NID <span class="text-danger">*</span></label>
                <input type="number" class="form-control w-25 @error('nid') is-invalid @enderror" id="nid"
                    name="nid" value="{{ $employee->nid }}" placeholder="Enter Your NID Number">
                @error('nid')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                <textarea type="text" class="form-control w-25 @error('address') is-invalid @enderror" id="address" name="address"
                    placeholder="Enter Your Address">{{ $employee->address }}</textarea>
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender <span class="text-danger me-2">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                        @if ($employee->gender == 'male') @checked(true) @endif />
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                        @if ($employee->gender == 'female') @checked(true) @endif>
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="gender" id="others" value="others"
                        @if ($employee->gender == 'others') @checked(true) @endif>
                    <label class="form-check-label" for="others">Others</label>
                </div>
                @error('gender')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </fieldset>

        <h3>Educational Qualifications</h3>
        <fieldset>
            <legend>Educational Qualifications</legend>

            <div class="mb-3">
                <label for="ssc" class="form-label">SSC <span class="text-danger">*</span></label>
                <div class="container">
                    <div class="row w-50">
                        <div class="col-md-6">
                            <input type="number" class="form-control  @error('ssc_gpa') is-invalid @enderror"
                                id="ssc_gpa" name="ssc_gpa" value="{{ $employee1->ssc_gpa }}"
                                placeholder="Enter Your GPA">
                            @error('ssc_gpa')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control  @error('ssc_year') is-invalid @enderror"
                                id="ssc_year" name="ssc_year" value="{{ $employee1->ssc_year }}"
                                placeholder="Enter Your Passing Year">
                            @error('ssc_year')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="hsc" class="form-label">HSC <span class="text-danger">*</span></label>
                <div class="container">
                    <div class="row w-50">
                        <div class="col-md-6">
                            <input type="number" class="form-control  @error('hsc_gpa') is-invalid @enderror"
                                id="hsc_gpa" name="hsc_gpa" value="{{ $employee1->hsc_gpa }}"
                                placeholder="Enter Your GPA">
                            @error('hsc_gpa')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control  @error('hsc_year') is-invalid @enderror"
                                id="hsc_year" name="hsc_year" value="{{ $employee1->hsc_year }}"
                                placeholder="Enter Your Passing Year">
                            @error('hsc_year')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="bsc" class="form-label">B.SC <span class="text-danger">*</span></label>
                <div class="container">
                    <div class="row w-50">
                        <div class="col-md-6">
                            <input type="number" class="form-control  @error('bsc_cgpa') is-invalid @enderror"
                                id="bsc_cgpa" name="bsc_cgpa" value="{{ $employee1->bsc_cgpa }}"
                                placeholder="Enter Your CGPA">
                            @error('bsc_cgpa')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control  @error('bsc_year') is-invalid @enderror"
                                id="bsc_year" name="bsc_year" value="{{ $employee1->bsc_year }}"
                                placeholder="Enter Your Passing Year">
                            @error('bsc_year')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="msc" class="form-label">M.SC </label>
                <div class="container">
                    <div class="row w-50">
                        <div class="col-md-6">
                            <input type="number" class="form-control  @error('msc_cgpa') is-invalid @enderror"
                                id="msc_cgpa" name="msc_cgpa" value="{{ $employee1->msc_cgpa }}"
                                placeholder="Enter Your CGPA">
                            @error('msc_cgpa')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control  @error('msc_year') is-invalid @enderror"
                                id="msc_year" name="msc_year" value="{{ $employee1->msc_year }}"
                                placeholder="Enter Your Passing Year">
                            @error('msc_year')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <h3>Professional Information</h3>
        <fieldset>
            <legend>Professional Information</legend>

            <div class="mb-3">
                <label for="previous_company_name" class="form-label">Previous Company Name <span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control w-25 @error('previous_company_name') is-invalid @enderror"
                    id="previous_company_name" name="previous_company_name"
                    value="{{ $employee2->previous_company_name }}" placeholder="Enter Your Previous Company Name">
                @error('previous_company_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="designation" class="form-label">Designation <span class="text-danger">*</span></label>
                <input type="text" class="form-control w-25 @error('designation') is-invalid @enderror"
                    id="designation" name="designation" value="{{ $employee2->designation }}"
                    placeholder="Enter Your Designation">
                @error('designation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="experience" class="form-label">Experience <span class="text-danger">*</span></label>
                <input type="number" class="form-control w-25 @error('experience') is-invalid @enderror"
                    id="experience" name="experience" value="{{ $employee2->experience }}"
                    placeholder="Enter Your Years of Experience">
                @error('experience')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="current_Salary" class="form-label">Current Salary <span
                        class="text-danger">*</span></label>
                <input type="number" class="form-control w-25 @error('current_salary') is-invalid @enderror"
                    id="current_Salary" name="current_salary" value="{{ $employee2->current_salary }}"
                    placeholder="Enter Your Current Salary">
                @error('current_salary')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </fieldset>
    </form>

    {{-- Bootstrap 5 Script File --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    {{-- Steps JS Script --}}
    <script>
        var form = $("#example-advanced-form").show();

        form.steps({
                headerTag: "h3",
                bodyTag: "fieldset",
                transitionEffect: "slideLeft",
                onStepChanging: function(event, currentIndex, newIndex) {
                    // Allways allow previous action even if the current form is not valid!
                    if (currentIndex > newIndex) {
                        return true;
                    }
                    // Forbid next action on "Warning" step if the user is to young
                    if (newIndex === 3 && ($("#age").val()) == "") {
                        return false;
                    }
                    // Forbid next action on "Warning" step if the user is to young
                    if (newIndex === 1 && Number($("#age-2").val()) < 18) {
                        return false;
                    }
                    // Needed in some cases if the user went back (clean up)
                    if (currentIndex < newIndex) {
                        // To remove error styles
                        form.find(".body:eq(" + newIndex + ") label.error").remove();
                        form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                    }
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onStepChanged: function(event, currentIndex, priorIndex) {
                    // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3) {
                        form.steps("previous");
                    }
                },
                onFinishing: function(event, currentIndex) {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function(event, currentIndex) {
                    form.submit();
                }
            })
            .validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.after(error);
                },
                // rules: {
                //     name: "required",
                //     age: "required",
                //     mobile: "required",
                //     nid: "required",
                //     address: "required",
                //     ssc_gpa: "required",
                //     ssc_year: "required",
                //     hsc_gpa: "required",
                //     hsc_year: "required",
                //     bsc_cgpa: "required",
                //     bsc_year: "required",
                //     previous_company_name: "required",
                //     designation: "required",
                //     experience: "required",
                //     current_salary: "required",
                // },
                // messages: {
                //     name: "Please enter your name",
                //     age: "Please enter your age",
                //     mobile: "Please enter your mobile number",
                //     nid: "Please enter your NID number",
                //     address: "Please enter your address",
                //     ssc_gpa: "Please enter your SSC GPA",
                //     ssc_year: "Please enter your SSC passing year",
                //     hsc_gpa: "Please enter your HSC GPA",
                //     hsc_year: "Please enter your HSC passing year",
                //     bsc_cgpa: "Please enter your B.SC CGPA",
                //     bsc_year: "Please enter your B.SC passing year",
                //     previous_company_name: "Please enter your previous company name",
                //     designation: "Please enter your designation",
                //     experience: "Please enter your years of experience",
                //     current_salary: "Please enter your current salary",
                // },
            });
    </script>

</body>

</html>
