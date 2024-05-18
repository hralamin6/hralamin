    <div class="flex flex-col items-center h-[100vh] md:h-[90vh] lg:h-[80vh] xl:h-[71vh] justify-center aos-init aos-animate"
         data-aos="fade">
        <!-- personal image -->
        <img class="rounded-full w-[250px] h-[250px] 2xl:w-[280px] 2xl:h-[280px]"
             src="{{$main->getFirstMediaUrl('main_image', 'thumb')}}" alt="about avatar" onerror="this.onerror=null;this.src='https://picsum.photos/id/10/600/300';" />
        <h3 class="mt-6 mb-1 text-2xl font-semibold dark:text-white">{{$main->name}}</h3>
        <p class="mb-4 text-[#7B7B7B]">{{$main->designation}}</p>
        <!-- social link and social  buttons -->
        <div class="flex space-x-3">
            <!-- facebook link -->
            <a href="{{$main->facebook}}" target="_blank" rel="noopener noreferrer">
                            <span class="socialbtn text-[#1773EA]">
                                <i class="fa-brands fa-facebook-f"></i>
                            </span>
            </a>
            <!-- twitter link -->
            <a href="{{$main->twitter}}" target="_blank" rel="noopener noreferrer">
                            <span class="socialbtn text-[#1C9CEA]">
                                <i class="fa-brands fa-twitter"></i>
                            </span>
            </a>
            <!-- dribbble icon and link -->
            <a href="{{$main->youtube}}" target="_blank" rel="noopener noreferrer">
                            <span class="socialbtn text-[#e14a84]">
                                <i class="fa-brands fa-youtube"></i>
                            </span>
            </a>
            <!-- linkedin icon and link -->
            <a href="{{$main->github}}" target="_blank" rel="noopener noreferrer">
                            <span class="socialbtn text-[#0072b1]">
                                <i class="fa-brands fa-github"></i>
                            </span>
            </a>
        </div>
        <!-- dowanload button -->
        <a href="{{\App\Models\Setup::first()->getFirstMediaUrl('resume')}}" class="dowanload-btn flex gap-2">
            <i class="fas fa-download"></i> Download CV </a>
    </div>

