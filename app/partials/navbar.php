<header class="sz-navbar  w-full px-4">
  <div class="container mx-auto">
    <nav class="sz-container px-4 ">
      <div class="sz-logo  flex items-center">
        <a href="/">
          <img class="h-[50px]" src="<?= get_template_directory_uri() . '/assets/images/archigram-logo-black.svg' ?>"
            alt="Logo de digican" />
        </a>
      </div>

      <ul class="sz-menu  text-lg">

        <li class="">
          <a href="/cabinet">Le cabinet</a>
        </li>
        <li class="">
          <a href="/nos-projet">Nos projet</a>
        </li>
        <li class="">
          <a href="/mag">Le mag</a>
        </li>
        <li class="">
          <a href="/Press">Press</a>
        </li>
        <li class="">
        <a href="/estimation" class="rounded-full bg-[#CAEB4F]  py-3 px-7  flex gap-2 items-center group ">
          Estimation
          <div class="w-8 ">
            <img class="transition-transform duration-1000 group-hover:rotate-y-360" src="<?= get_template_directory_uri() . '/assets/images/dollar.svg' ?>" alt="">
          </div>
        </a>

      </li>
      </ul>
      <div class="sz-burger">
        <div class="sz-line1"></div>
        <div class="sz-line2"></div>
        <div class="sz-line3"></div>
      </div>
    </nav>
  </div>
</header>