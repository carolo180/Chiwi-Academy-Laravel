<section class="mt-14">
<h4 class="text-center mb-14 underline underline-offset-4">OUR TOP TEN MASTERCLASS</h4>
<div class="owl-container">
    <div class="owl-carousel owl-theme">
        @foreach ($cursos as $curso)
                   <div class="item bg-black flex flex-col items-center">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <picture class="h-44 w-auto">
                                <img src="{{$curso->featured}}" alt="{{$curso->name}}">
                            </picture>
                           
                        </div>
                        <h5 class="mb-0 text-center text-white"><b>{{$curso->name}}</b></h5>
                        <button class="bg-gray-600 my-1 hover:bg-gray-200 hover:text-black text-amber-300 w-32 h-18 text-white rounded md:text-base">Watch More</button>
                        <br>
                    </div>
         @endforeach
     
    </div>
</div>
</section>


