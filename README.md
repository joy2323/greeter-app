## From the greeter_v1.php

The action attribute of the form specifies the destination of the data in the form after the form is submitted. In this case, it is greeter_v1.php which is the same page.
The method attribute specifies the request type that is made when the form is submitted
When the method attribute is not specified, the default is GET - like in this case.
When the form is submitted, the values are placed in the $_GET[] built-in superglobal as an array with keys being the name attributes of the form fields and the values as what was entered into the form.
When the method used to submit the form is GET, the values from the form are submitted through the browser URL and are visible. Something like this: