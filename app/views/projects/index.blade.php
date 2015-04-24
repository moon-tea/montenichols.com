@extends ('layouts.masterLayout')

@section ('content')
	<div id="projects" class="tab10"> 
	<h2>Web Projects</h2>
	<a class="" href="">
		virtual gemini profile manager
	</a>
	<br></br>
	<a class="" href="">
		epimed international batch product manager
	</a>
	<br></br>

	<a class="" href="">
		virtualgemini.com
	</a>
	<br></br>
	
	<h2>Game Projects</h2> 
	<a class="" href="http://vestigethegame.com/">
		{{ HTML::image('img/Vestige_banner.jpg', "vestige", array('class' => ' banner')) }}
	</a>
	<br></br>

	<a class="" href="{{ route('project_cp_buzzard') }}">
		{{ HTML::image('img/cp_buzzard_banner.jpg', "cp_buzzard", array('class' => ' banner')) }}
	</a>
	<br></br>
	
	<a class="" href="{{ route('project_zelda_level') }}">
	<a href="projects/zelda_level">
		{{ HTML::image('img/zelda_banner.jpg', "zelda level", array('class' => ' banner')) }}
	</a>
	<br></br>

	<h2>Flash Projects</h2></a>
	<a href="projects/stringEmitter">
		{{ HTML::image('img/virtualgeminiHUD_banner.jpg', "virtual gemini hud", array('class' => ' banner')) }}
	</a>
	<br></br> 
	<a href="projects/stringEmitter">
		{{ HTML::image('img/stringEmitter_banner.jpg', "tezcatlipoca", array('class' => ' banner')) }}
	</a>
	<br></br>  
	<a href="projects/tezcatlipoca">
		{{ HTML::image('img/tezcatlipoca_Banner.jpg', "tezcatlipoca", array('class' => ' banner')) }}
	</a>
	<br></br>

</div> 
@stop