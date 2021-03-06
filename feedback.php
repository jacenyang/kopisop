<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css">
    <link rel="stylesheet" href="styles/feedback.css">
    <title>Login</title>
</head>

<body>

    <p style="margin-top: 25px; margin-left: 25px; font-size: 48px">
        <span>Send Us</span>
        <span style="color: yellow">Feedback!</span>
    </p>
    <p style="margin-left: 25px">
        Should you face any issue, feel free to leave a feedback.
        <br>
        We will get back to you as soon as we can.
    </p>

    <div class="card mx-auto">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="nameInput">Full Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light border-0">
                                <img class="input-icon" src="./assets/images/icons/user.png" alt="user">
                            </span>
                        </div>
                        <input type="name" class="form-control" id="nameInput" placeholder="Enter your name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="emailInput">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light border-0">
                                <img class="input-icon" src="./assets/images/icons/email.png" alt="email">
                            </span>
                        </div>
                        <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="messageInput">Message</label>
                    <textarea class="form-control" id="messageInput" rows="3" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-block btn-custom">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>