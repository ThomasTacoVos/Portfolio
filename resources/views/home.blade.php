@extends('layout.master')

@section('content')
    <div id="banner-img" class="sixteen columns module">
        <h2 id="fade1" class="fade-in"> Hi there!</h2>
        <br/>
        <h2 class="fade-in">This is a block of text!</h2>
        <br/>
        <h2 class="fade-in"><span class="blue small">This block is blue! Wow!</span></h2><br/>
    </div> <!-- Banner Image-->

    <br class="clear"/>

    <!-- Gallery -->
    <div id="work" class="sixteen columns module">
        <h2 class="fade-in">You can see pictures below:</h2>
        <div class="grid-container">
            <div class="gallery group">
                <div class="grid">
                    <a href="#">
                        <img src="http://placehold.it/300x160">
                        <span>Nulla facilisi. Curabitur quis magna nunc, eu lobortis eros. Nullam odio lectus, mattis at dictum at, lobortis eget erat. Phasellus eu felis eget eros aliquam pharetra. </span>
                    </a>
                </div>
                <div>
                    <div class="grid">
                        <a href="#">
                            <img src="http://placehold.it/300x160">
                            <span>Nulla facilisi. Curabitur quis magna nunc, eu lobortis eros. Nullam odio lectus, mattis at dictum at, lobortis eget erat. Phasellus eu felis eget eros aliquam pharetra. </span>
                        </a>
                    </div>
                    <div class="grid">
                        <a href="#">
                            <img src="http://placehold.it/300x160">
                            <span>Nulla facilisi. Curabitur quis magna nunc, eu lobortis eros. Nullam odio lectus, mattis at dictum at, lobortis eget erat. Phasellus eu felis eget eros aliquam pharetra. </span>
                        </a>
                    </div>
                    <div class="grid">
                        <a href="#">
                            <img src="http://placehold.it/300x160">
                            <span>Nulla facilisi. Curabitur quis magna nunc, eu lobortis eros. Nullam odio lectus, mattis at dictum at, lobortis eget erat. Phasellus eu felis eget eros aliquam pharetra. </span>
                        </a>
                    </div>
                    <div class="grid">
                        <a href="#">
                            <img src="http://placehold.it/300x160">
                            <span>Nulla facilisi. Curabitur quis magna nunc, eu lobortis eros. Nullam odio lectus, mattis at dictum at, lobortis eget erat. Phasellus eu felis eget eros aliquam pharetra. </span>
                        </a>
                    </div>
                    <div class="grid">
                        <a href="#">
                            <img src="http://placehold.it/300x160">
                            <span>Nulla facilisi. Curabitur quis magna nunc, eu lobortis eros. Nullam odio lectus, mattis at dictum at, lobortis eget erat. Phasellus eu felis eget eros aliquam pharetra. </span>
                        </a>
                    </div>
                </div> <!--Gallery Group End-->
            </div> <!-- Grid Container End -->
        </div><!--#Work End-->

        <div id="contact" class="sixteen columns module">
            <h2>Drop me a line!</h2>
            <ul>
                <li><a href="#">M</a></li>
                <li><a href="#">T</a></li>
                <li><a href="#">F</a></li>
            </ul> <!--Social Media Links End-->
        </div><!-- Contact End-->


    </div> <!--End of Container -->

@endsection

@section('scripts)

    @endsection