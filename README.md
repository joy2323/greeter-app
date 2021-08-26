## From the greeter_v1.php

#The `action` attribute of the form specifies the destination of the data in the form after the form is submitted. In this case, it is greeter_v1.php which is the same page.


##The `method` attribute specifies the request type that is made when the form is submitted.


###When the `method` attribute is not specified, the default is GET - like in this case.


####When the form is submitted, the values are placed in the *$_GET[]* built-in superglobal as an array with keys being the `name` attributes of the form fields and the values as what was entered into the form.

#####When the method used to submit the form is GET, the values from the form are submitted through the browser URL and are visible. Something like this:

http://localhost/greeter-app/greeter_v1.php?name=Ursula+Goan&greet=

### Using the GET Method is not a good practice for two main reasons:

#If there was any sensitive information in the form such as a password, it would be visible in the browser URL and therefore a security risk.


##There is a limit to the length of a string that can be passed through the URL. Very long strings cannot be passed using GET.



## From the greeter_v2.php

#In this file, setting the method attribute to `post` enables the browser to send a POST request (instead of the GET request of version 1) when the submit button is clicked.


##When the form is submitted, the values are stored in the superglobal *$_POST[ ]* variable in the form of an array.


###Using a POST request doesn't display the information being submitted on the browser URL, which is good.


####The form is also being validated; if the form is submitted without a value for the name, an error message (or rather a validation message) is displayed, telling the user to provide a name.


#####A new method has been introduced called `empty()` which checks if a variable has a value by returning true or false.
