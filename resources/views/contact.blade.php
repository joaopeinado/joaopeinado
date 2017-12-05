@extends("layout")
@section("content")
  <?php
    function Redirecty($url, $permanent = false)
	{
    	if (headers_sent() === false)
    	{
        	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    	}

    	exit();
	}

  	if ($text == 'linkedin'){
  		Redirecty('https://www.linkedin.com/in/joaopeinado/', false);
  	} else if ($text == 'kaggle'){
  		Redirecty('https://www.kaggle.com/joaopmpeinado', false);
  	} else if ($text == 'facebook'){
  		Redirecty('https://www.facebook.com/joaopedro.peinado.37', false);
  	} else {
  		echo 'Email: joaopeinadobcc@gmail.com <p>';
  		echo 'Kaggle: <a href="https://www.kaggle.com/joaopmpeinado">João Pedro Peinado</a> <p>';
  		echo 'Facebook: <a href="https://www.facebook.com/joaopedro.peinado.37">João Pedro Peinado</a><p>';
  		echo 'Linkedin: <a href="https://www.linkedin.com/in/joaopeinado/">João Pedro Molina Peinado</a>';
  	}
  ?> 
@stop