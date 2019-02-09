$('.formValidate').each(function () {
    $(this).validate({
        rules: {
            fname: "required",
            lname: "required",
            email:{
                required: true,
                email: true
            },
            password:{
                required: true,
                minlength: 5,
            },
            password_confirmation:
                {
                    required:true,
                    minlength:5,
                    equalTo:'#password',
                },
            phoneno:{
                required: true,
                digits: 5,
                minlength: 7,
            },
            roll:{
                required: true,
                minlength: 2,
            },
            gender:"required",
            user_type:"required",
            post:"required",
            facebook:"required",
            twitter:"required",
            post:"required",
            message:"required",

        },
        messages: {
            fname: "Please enter your firstname",
            lname: "Please enter your lastname",
            email: "Please enter a valid email address",
            password:
                {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters"
                },
            phoneno:
                {
                    required: "Please enter your phone no",
                    digits:"Please enter only digits.",
                    minlength: "Your phone number must be at least 7 characters."
                },
            password_confirmation:
                {
                    required: "Please retype your password again",
                    minlength: "Your password must be at least 5 characters",
                    equalTo: "please retype same password above",
                },
            gender: "Please specify your gender",
            user_type: "What type of User are you?",
            post:"What is your post?",
            facebook:"Please enter your fb link",
            twitter:"Please enter your twitter link",
            post:"Create a post",
            message:"What is your message?",


        }
    });
});