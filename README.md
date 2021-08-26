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

