@extends ('layouts.masterLayout')

@section ('content')
	<br>
	<p class="center">
		My name is Monte Nichols.
		I am a software developer with a B.S. in Computer Science from The University of Texas at Dallas and a B.F.A in Interactive Design and Game Development from the Savannah College of art and Design.
		I currently work in Dallas, Texas in the Virtual Reality Labs at The Center for Brainhealth as an interactive programmer. 			
		It is my passion to bridge the gap between tech and visuals.
	</p>
	<p class="center">
		Take a look at my <a class="" href="{{ URL::to ('/resume') }}">resume</a> to see more of my technical qualifications.
	</p>
	<br>
	{{ HTML::image('img/monte_nichols.jpg', "monte", array('class' => 'circular center-img')) }}
@stop