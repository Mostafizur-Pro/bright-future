<div class="hero  ">
    <div class="hero-content flex-col lg:flex-row">
        <!-- <img src="{{url('assets/home/out-medical/image1.png')}}" class="max-w-sm rounded-lg shadow-2xl" /> -->
        <img src="{{ asset('assets/home/banner/banner.jpg') }}" class="max-w-lg rounded-lg " />

        <div>
            <!-- <p class="text-gray-400">OUR MEDICAL</p> -->
            <h1 class="text-3xl font-bold"> Always Push Yourself to The Next Leve</h1>
            <!-- <img src="{{ asset('assets/home/our-medical/lifeline.png') }}" class="w-20 rounded-lg " /> -->
            <!-- <p class="py-6">We provide the most full medical services, so every person could have the pportunity o receive qualitative medical help.</p>
            <p class="py-6">Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and bore advanced restorative dentistry. We are among the most qualified implant providers in the AUS with over 30 years of uality training and experience.</p> -->
            <div class="collapse collapse-plus ">
                <input type="radio" name="my-accordion-3" checked="checked" />
                <div class="collapse-title text-xl font-medium">
                    Click to open this one and close others
                </div>
                <div class="collapse-content">
                    <p>hello</p>
                </div>
            </div>
            <div class="collapse collapse-plus ">
                <input type="radio" name="my-accordion-3" />
                <div class="collapse-title text-xl font-medium">
                    Click to open this one and close others
                </div>
                <div class="collapse-content">
                    <p>hello</p>
                </div>
            </div>
            <div class="collapse collapse-plus ">
                <input type="radio" name="my-accordion-3" />
                <div class="collapse-title text-xl font-medium">
                    Click to open this one and close others
                </div>
                <div class="collapse-content">
                    <p>hello</p>
                </div>
            </div>
            <button class="btn btn-primary"><a href="{{url('/about')}}">MORE ABOUT</a></button>
        </div>
    </div>
</div>