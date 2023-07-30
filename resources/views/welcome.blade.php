<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Informations</title>
    <!-- Other head elements -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.steps.js') }}"></script>
    <script src="{{ asset('js/jquery.steps.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="{{ asset('css/jquery.steps.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <form id="example-advanced-form" action="#" class="form-control">
        <h3>Personal Information</h3>
        <fieldset class="align-middle">
            <legend>Personal Information</legend>

            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control w-25" id="name" placeholder="Enter Your Name">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age <span class="text-danger">*</span></label>
                <input type="number" class="form-control w-25" id="age" placeholder="Enter Your Age">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile <span class="text-danger">*</span></label>
                <input type="number" class="form-control w-25" id="mobile" placeholder="Enter Your Mobile Number">
            </div>
            <div class="mb-3">
                <label for="nid" class="form-label">NID <span class="text-danger">*</span></label>
                <input type="number" class="form-control w-25" id="nid" placeholder="Enter Your NID Number">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                <textarea type="text" class="form-control w-25" id="address" placeholder="Enter Your Address"></textarea>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender <span class="text-danger me-2">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1" checked>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                        value="option3">
                    <label class="form-check-label" for="inlineRadio3">Others</label>
                </div>
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
                            <input type="number" class="form-control" id="ssc" placeholder="Enter Your GPA">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="ssc"
                                placeholder="Enter Your Passing Year">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="hsc" class="form-label">HSC <span class="text-danger">*</span></label>
                <div class="container">
                    <div class="row w-50">
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="hsc" placeholder="Enter Your GPA">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="hsc"
                                placeholder="Enter Your Passing Year">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="bsc" class="form-label">B.SC <span class="text-danger">*</span></label>
                <div class="container">
                    <div class="row w-50">
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="bsc" placeholder="Enter Your CGPA">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="bsc"
                                placeholder="Enter Your Passing Year">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="msc" class="form-label">M.SC </label>
                <div class="container">
                    <div class="row w-50">
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="msc" placeholder="Enter Your CGPA">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="msc"
                                placeholder="Enter Your Passing Year">
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
                <input type="text" class="form-control w-25" id="previous_company_name"
                    placeholder="Enter Your Previous Company Name">
            </div>
            <div class="mb-3">
                <label for="designation" class="form-label">Designation <span class="text-danger">*</span></label>
                <input type="text" class="form-control w-25" id="designation"
                    placeholder="Enter Your Designation">
            </div>
            <div class="mb-3">
                <label for="experience" class="form-label">Experience <span class="text-danger">*</span></label>
                <input type="number" class="form-control w-25" id="experience"
                    placeholder="Enter Your Years of Experience">
            </div>
            <div class="mb-3">
                <label for="current_Salary" class="form-label">Current Salary <span
                        class="text-danger">*</span></label>
                <input type="number" class="form-control w-25" id="current_Salary"
                    placeholder="Enter Your Current Salary">
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
                if (newIndex === 3 && Number($("#age-2").val()) < 18) {
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
                // Used to skip the "Warning" step if the user is old enough.
                if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                    form.steps("next");
                }
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
                alert("Submitted!");
            }
        }).validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password-2"
                }
            }
        });
    </script>
</body>

</html>
