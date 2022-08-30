<body class="h-100">
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous">
<div class="bg-image" style="background-image: url(bg.jpg); height: 100vh">
    <h1 class="mx-auto mb-5" style="width: 350px">Feedback form</h1>
    <form method="post" action="do_feedback.php">
        <div class="container h-50">
            <div class="row h-50 justify-content-center align-items-center">
                <div class="col-10 col-lg-5">
                    <div class="form-group" style="max-width: 400px">
                        <label for="name" class="mt-5 font-weight-bold">What's your name?</label>
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name" required>
                    </div>
                    <div class="form-group" style="max-width: 400px">
                        <label for="select">What country are you from?</label>
                        <select class="form-control" id="select" name="country">
                            <option>Russia</option>
                            <option>USA</option>
                            <option>China</option>
                        </select>
                    </div>
                    <div class="form-group mt-3" style="max-width: 400px">
                        <label class="font-weight-bold">Choose your age group</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="18-23" name="radio" required
                                   id="option1">
                            <label class="form-check-label" for="option1">
                                18-23
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="24-27" name="radio" required
                                   id="option2">
                            <label class="form-check-label" for="option2">
                                24-27
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="27+" name="radio" required id="option3">
                            <label class="form-check-label" for="option3">
                                27+
                            </label>
                        </div>
                    </div>
                    <div class="form-group" style="max-width: 400px">
                        <label class="font-weight-bold">What do you expect from your dream job?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Good salary" id="check1"
                                   name="checkbox[]">
                            <label class="form-check-label" for="check1">
                                Good salary
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Professional team" id="check2"
                                   name="checkbox[]">
                            <label class="form-check-label" for="check2">
                                Professional team
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Vacation twice a year" id="check3"
                                   name="checkbox[]">
                            <label class="form-check-label" for="check3">
                                Vacation twice a year
                            </label>
                        </div>
                    </div>
                    <div class="input-group" style="width: 400px">
                        <label class="form-label font-weight-bold">Tell us about your experience with our
                            company
                            <textarea class="form-control " style="width: 400px" rows="3" name="info"></textarea>
                        </label>
                    </div>
                    <div class="row mt-3" style="max-width: 400px">
                        <button type="submit" class="btn btn-primary mr-5 mx-3">Submit</button>
                        <button type="reset" class="btn btn-outline-primary ml-5" >Reset form</button>
                    </div>
                </div>
            </div>
    </form>
</div>