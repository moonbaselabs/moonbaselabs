@extends('_layouts.base')

@section('content')
<style>
#galaxy {
  position: relative;
  width: 100%;
  height: 100%;
  transform: rotate3d(1, .1, 0, 75deg);
  transform-style: preserve-3d;
}
#sun, .planet {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  margin-left: -0.5em;
  border-radius: 50%;
  transform-style: preserve-3d;
}
#sun {
  transform: rotateX(-75deg);
}
.pos {
  position: absolute;
  transform-style: preserve-3d;
  animation-name: invert;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}
.planet {
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}
.orbit {
  position: absolute;
  top: 50%;
  left: 50%;
  border: 6px solid rgba(75, 90, 107, .2);
  border-radius: 50%;
  animation-name: orbit;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  transform-style: preserve-3d;
}

/* Animations */
@keyframes orbit {
  0%   { transform: rotateZ(0deg); }
  100% { transform: rotateZ(-360deg); }
}
@keyframes invert {
  0%   { transform: rotateX(-90deg) rotateY(360deg) rotateZ(0deg); }
  100% { transform: rotateX(-90deg) rotateY(0deg) rotateZ(0deg); }
}

/* Orbit sizes */
#mercury.orbit {
  width: 20em;
  height: 20em;
  margin-top: -10em;
  margin-left: -10em;
}
#venus.orbit {
  width: 16em;
  height: 16em;
  margin-top: -8em;
  margin-left: -8em;
}
#earth.orbit {
  width: 20em;
  height: 20em;
  margin-top: -10em;
  margin-left: -10em;
}
#mars.orbit {
  width: 24em;
  height: 24em;
  margin-top: -12em;
  margin-left: -12em;
}

/* Planet starting positions */
#mercury .pos {
  left: 50%;
  top: -1px;
  border: solid 3px red;
}
#venus .pos {
  left: 50%;
  top: -1px;
  border: solid 3px red;
}
#earth .pos {
  left: 50%;
  top: -1px;
  border: solid 3px red;
}
#mars .pos {
  left: 50%;
  top: -1px;
  border: solid 3px red;
}

/* Planet animation durations */
#mercury.orbit, #mercury .pos {
  animation-duration: 4s;
}
#venus.orbit, #venus .pos {
  animation-duration: 6s;
}
#earth.orbit, #earth .pos {
  animation-duration: 8s;
}
#mars.orbit, #mars .pos {
  animation-duration: 10s;
}

/* Planet sizes */
#sun {
	font-size: 10em;
}
#mercury {
	font-size: 1em;
}
#venus {
	font-size: 2em;
}
#earth {
	font-size: 3em;
}
#mars {
	font-size: 4em;
}

/* Planet shadow animations */
#mercury .planet {
  animation-name: shadow;
  animation-duration: 4s;
}
#venus .planet {
  animation-name: shadow;
  animation-duration: 6s;
}
#earth .planet {
  animation-name: shadow;
  animation-duration: 8s;
}
#mars .planet {
  animation-name: shadow;
  animation-duration: 10s;
}

@keyframes shadow {
  0% { box-shadow: inset .2em 0 .1em rgba(0, 0, 0, 0.5); }
  25% { box-shadow: inset 1em -.5em .2em rgba(0, 0, 0, 0.5); }
  50% { box-shadow: inset .1em 0 .5em rgba(0, 0, 0, 0.5); }
  100% { box-shadow: inset .2em 0 .1em rgba(0, 0, 0, 0.5); }
}
</style>
<div class="absolute z-10 top-0 left-0 w-full py-6 px-4 sm:px-6 lg:py-12 lg:px-8">
  <div class="relative max-w-lg mx-auto lg:max-w-7xl">
    <div class="lg:flex items-center justify-between">
      <a href="/" title="{{ $page->siteName }} home">
        <img class="block h-14 mx-auto" height="48" src="/assets/images/logo.svg" alt="Moonbase Labs">
      </a>
      <x-navigation :page="$page" />
    </div>
  </div>
</div>
<div class="relative bg-gradient-to-t from-onyx-500 overflow-hidden">
  <div class="pt-56 pb-24 sm:py-64 lg:py-80">
    <div class="absolute inset-0 bg-repeat opacity-50" style="background-image: url(/assets/images/stars.png); background-size: 50%;"></div>
    <div class="sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
      <div class="relative h-full max-w-screen-xl mx-auto">
        <div id="universe" class="absolute left-1/2 top-1/2 -ml-24 transform scale-150">
          <div id="galaxy">
            <div id="sun" class="bg-onyx-500"></div>
            <div id="mercury" class="orbit">
              <div class="pos">
                <div class="planet bg-orange-500"></div>
              </div>
            </div>
            <div id="venus" class="orbit">
              <div class="pos">
                <div class="planet bg-blue-500"></div>
              </div>
            </div>
            <div id="earth" class="orbit">
              <div class="pos">
                <div class="planet bg-green-500"></div>
              </div>
            </div>
            <div id="mars" class="orbit">
              <div class="pos">
                <div class="planet bg-gold-500"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="relative">
      <div class="mx-auto max-w-screen-xl px-4 sm:px-6">
        <div class="text-center">
          <h2 class="text-4xl tracking-tight leading-10 font-display font-bold text-white sm:text-5xl sm:leading-none md:text-6xl">
            Embark on a <span class="text-orange-500">digital transformation</span>
          </h2>
          <p class="mt-3 max-w-md mx-auto text-xl text-silver-600 sm:text-2xl md:mt-5 md:text-3xl md:max-w-4xl">
            We create digital tools to boost what you do best.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="transform sm:-skew-y-3 relative overflow-hidden bg-onyx-700 py-24 sm:py-32 lg:py-48 sm:-my-10 lg:-my-20">
  <div class="transform sm:skew-y-3 relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">

    <!-- alert -->
    <div class="-mt-12 mb-16 lg:-mt-20 lg:mb-24">
      <div class="max-w-3xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="lg:flex items-center justify-between p-2 rounded-lg bg-blue-500 shadow-lg sm:p-3">
          <div class="flex items-center">
            <span class="flex p-2 rounded-lg bg-blue-600">
              <!-- donate-heart -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.726 13.02L14 16H9v-1h4.065c.399 0 .638-.445.416-.777l-.888-1.332C12.223 12.334 11.599 12 10.93 12H9 3c-.553 0-1 .447-1 1v6c0 1.104.896 2 2 2h9.639c.865 0 1.688-.373 2.258-1.024L22 13l-1.452-.484C19.583 12.194 18.521 12.384 17.726 13.02zM19.258 7.39c.451-.465.73-1.108.73-1.818s-.279-1.353-.73-1.818C18.807 3.288 18.183 3 17.494 3c0 0-1.244-.003-2.494 1.286C13.75 2.997 12.506 3 12.506 3c-.689 0-1.313.288-1.764.753-.451.466-.73 1.108-.73 1.818s.279 1.354.73 1.818L15 12 19.258 7.39z"></path></svg>
            </span>
            <p class="ml-3 font-medium text-white truncate">
              <span class="lg:hidden">
                We love nonprofits!
              </span>
              <span class="hidden lg:inline">
                We build software that <strong>nonprofits</strong> use to change the world.
              </span>
            </p>
          </div>
          <div class="mt-2 flex-shrink-0 w-full lg:mt-0 lg:w-auto">
            <x-button href="/nonprofits" color="blue" class="w-full">
              Learn More
              <span class="ml-2 -mr-1">&RightArrow;</span>
            </x-button>
          </div>
        </div>
      </div>
    </div>
    <div class="relative">
      <h2 class="text-center text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        Your partner in modern innovation
      </h2>
      <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-silver-700">
        We help innovators eliminate friction at the foundations of their work. By integrating our digital experience with your deep domain knowledge, we create tools that empower you to scale your expertise.
      </p>
    </div>

    <div class="relative mt-12 lg:mt-24 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
      <div class="relative">
        <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
          What is Digital Transformation?
        </h3>
        <p class="mt-3 text-lg text-silver-700">
          Digital Transformation is an incremental approach to aligning people, processes, and technology around your mission.
        </p>

        <dl class="mt-10 space-y-10">
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-onyx-500 text-blue-300">
                <!-- flask -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M15,9.783V4h1V2h-2h-4H8v2h1v5.783l-4.268,9.389c-0.283,0.622-0.23,1.337,0.14,1.911C5.241,21.657,5.87,22,6.553,22h10.895 c0.683,0,1.312-0.343,1.681-0.917c0.37-0.574,0.423-1.289,0.14-1.911L15,9.783z M10.91,10.414C10.97,10.284,11,10.143,11,10V4h2v6 c0,0.143,0.03,0.284,0.09,0.414L15.177,15H8.825L10.91,10.414z"></path></svg>
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                Small experiments over grand visions
              </dt>
              <dd class="mt-2 text-base text-silver-700">
                No moonshots! Progress is always incremental.
              </dd>
            </div>
          </div>

          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-onyx-500 text-blue-300">
                <!-- stats -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M20,12c-0.249,0-0.483,0.051-0.703,0.133l-2.398-1.963C16.958,9.956,17,9.734,17,9.5C17,8.114,15.886,7,14.5,7 S12,8.114,12,9.5c0,0.396,0.1,0.765,0.262,1.097l-2.909,3.438C9.237,14.015,9.121,14,9,14c-0.179,0-0.348,0.03-0.512,0.074 l-2.563-2.563C5.97,11.348,6,11.179,6,11c0-1.108-0.892-2-2-2s-2,0.892-2,2s0.892,2,2,2c0.179,0,0.348-0.03,0.512-0.074 l2.563,2.563C7.03,15.652,7,15.821,7,16c0,1.108,0.892,2,2,2s2-0.892,2-2c0-0.237-0.048-0.46-0.123-0.671l2.913-3.442 C14.017,11.953,14.252,12,14.5,12c0.411,0,0.792-0.107,1.133-0.281l2.399,1.963C18.016,13.786,18,13.891,18,14c0,1.108,0.892,2,2,2 s2-0.892,2-2S21.108,12,20,12z"></path></svg>
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                Create a business case for change
              </dt>
              <dd class="mt-2 text-base text-silver-700">
                Identify the pain points and require new tools to justify themselves.
              </dd>
            </div>
          </div>

          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-onyx-500 text-blue-300">
                <!-- sync -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M13 7.101c.003 0 .007 0 .01.001.318.065.634.163.937.291.296.125.581.281.849.461.264.178.513.383.74.61s.434.477.611.74c.182.271.337.556.461.851.127.298.225.613.291.937C16.966 11.321 17 11.66 17 12s-.034.679-.102 1.008c-.066.324-.164.639-.292.938-.123.293-.278.579-.459.848-.179.264-.385.514-.612.741l1.414 1.414c.317-.317.605-.666.855-1.037.254-.377.472-.777.645-1.187.178-.42.315-.863.408-1.316C18.952 12.949 19 12.475 19 12s-.048-.949-.143-1.41c-.093-.454-.23-.896-.407-1.314-.174-.412-.392-.812-.646-1.19-.249-.37-.537-.718-.854-1.035-.317-.318-.666-.605-1.035-.854-.373-.252-.773-.47-1.188-.646-.425-.18-.868-.317-1.315-.408C13.275 5.115 13.137 5.1 13 5.08V2L9 6l4 4V7.101zM5.55 14.724c.174.412.392.812.646 1.19.249.37.537.718.854 1.034.314.316.664.604 1.036.855.373.252.773.47 1.188.646.425.18.868.317 1.315.408.167.034.338.056.508.078v2.944l4-4-4-4v3.03c-.035-.006-.072-.003-.107-.011-.318-.065-.634-.163-.937-.291-.296-.125-.581-.281-.849-.461-.267-.179-.515-.384-.74-.61-.228-.228-.434-.477-.611-.74-.182-.271-.337-.556-.461-.851-.127-.298-.225-.613-.291-.937C7.034 12.679 7 12.34 7 12s.034-.679.102-1.008c.066-.324.164-.639.292-.938C7.517 9.76 7.672 9.475 7.853 9.206c.179-.264.385-.514.612-.741L7.051 7.05C6.733 7.368 6.445 7.716 6.195 8.087 5.941 8.464 5.724 8.864 5.551 9.274c-.178.42-.315.863-.408 1.316C5.048 11.051 5 11.525 5 12s.048.949.143 1.41C5.235 13.863 5.373 14.306 5.55 14.724z"></path></svg>
              </div>
            </div>
            <div class="ml-4">
              <dt class="text-lg leading-6 font-medium text-gray-900">
                Move Fast <em>and</em> Slow
              </dt>
              <dd class="mt-2 text-base text-silver-700">
                Bursts of activity followed by periods of rest to gather data and see what works
              </dd>
            </div>
          </div>
        </dl>
      </div>

      <div class="mt-10 lg:mt-0" aria-hidden="true">
        <x-animation.process class="left-50 top-0 xl:absolute xl:w-1/2 xl:mt-12" />
      </div>
    </div>



    <div class="relative mt-12 sm:mt-16 lg:mt-24">
      <h3 class="text-center text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
        How we deliver remarkable products
      </h3>
      <p class="mt-3 text-lg text-silver-700 text-center max-w-prose mx-auto">
        Our team of designers, engineers and analysts join forces to tackle your biggest challenges. We start with a discovery process followed by data analysis and software&nbsp;development.
      </p>
      <div class="mt-10 text-center">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-3">
          <div class="pt-12">
            <div class="h-full flow-root bg-onyx-500 rounded-lg px-6 pb-8">
              <div class="-mt-12">
                <div>
                  <span class="inline-flex items-center justify-center p-4 bg-orange-500 rounded-3xl shadow-lg">
                    <svg class="h-16 w-16 text-white" viewBox="0 0 64 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M35.869 2.575l3.664-1.107c7.193-2.173 14.805-2.464 20.113 2.84 5.045 5.042 5.12 12.03 3.169 18.718l.084.084-.419 1.326c-2.503 7.93-7.743 16.391-12.772 23.296C44.66 54.664 39.68 60.223 37.522 62.38L35.902 64 0 28.12l1.62-1.62c2.12-2.117 7.662-7.073 14.597-12.117C22.13 10.08 29.199 5.61 36.11 2.818l-.242-.243zm4.357 1.183l-.187.06c-.715.233-1.436.49-2.16.766C24.814 9.576 10.556 21.332 4.9 26.54a57.859 57.859 0 00-1.66 1.581l32.66 32.64c.419-.418.954-.976 1.583-1.657 5.252-5.689 17.028-19.945 21.973-32.954a44.28 44.28 0 00.837-2.402L40.278 3.742l-.051.016zm-.03-.097a47.677 47.677 0 01.231-.07 37.511 37.511 0 012.33-.61c5.98-1.36 11.434-.885 15.269 2.948 3.905 3.903 4.389 9.362 2.921 15.23a33.954 33.954 0 01-.733 2.507L40.197 3.66z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M36.306 14.351c1.404-1.402 3.677-1.347 5.025 0l8.347 8.343c1.405 1.404 1.434 3.609.063 5.12L35.82 41.728c-1.404 1.403-3.677 1.347-5.025 0l-8.429-8.423c-1.403-1.403-1.348-3.674 0-5.022l13.94-13.93zm7.294 5.994c-2.35-2.349-6.24-2.349-8.59 0-2.35 2.349-2.35 6.236 0 8.585 2.35 2.349 6.24 2.349 8.59 0 2.35-2.349 2.431-6.155 0-8.585z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M30.424 8.042c3.294-1.77 6.63-3.272 9.853-4.3l20.017 20.005c-2.886 9.144-9.673 19.233-15.507 26.702.517-.672 1.041-1.366 1.569-2.08l-3.971-3.97-11.751 7.047L12.56 33.385l7.132-11.825-3.967-3.965a143.417 143.417 0 014.613-3.327l.083.083c2.431 2.43 6.16 2.43 8.59 0 1.679-1.677 2.175-4.22 1.412-6.309zm19.173 35.467c-2.35-2.35-2.35-6.237 0-8.586 1.702-1.7 4.214-2.105 6.402-1.376a99.889 99.889 0 01-6.24 10.124l-.162-.162zm-6.645-30.777c-2.218-2.217-5.942-2.323-8.266 0l-13.94 13.93c-2.217 2.217-2.324 5.939 0 8.262l8.429 8.423c2.217 2.216 5.942 2.323 8.266 0l13.957-13.949.016-.018c2.179-2.375 2.203-5.99-.115-8.306l-8.347-8.342z"/><path d="M15.696 17.617l-.327.247a1.03 1.03 0 00.327-.247z"/></svg>
                  </span>
                </div>
                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Flybys to discover</h3>
                <p class="mt-5 text-base text-silver-700">
                  Every project starts with a flyby; a deep exploration of the challenges facing your organization.
                </p>
              </div>
            </div>
          </div>
          <div class="pt-12">
            <div class="h-full flow-root bg-onyx-500 rounded-lg px-6 pb-8">
              <div class="-mt-12">
                <div>
                  <span class="inline-flex items-center justify-center p-4 bg-blue-500 rounded-3xl shadow-lg">
                    <svg class="h-16 w-16 text-white" viewBox="0 0 64 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M41.76 33.694l-11.44-11.43-8.038 8.033 11.439 11.429 8.038-8.032zM41.418 16.493l-1.909.955 7.07 7.064.916-1.947-6.077-6.072z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M38.234 18.054l-6.6 3.136 11.2 11.191 3.139-6.595-7.739-7.732zm4.25 6.185l-2.74-2.739-2.746 2.744 2.74 2.738 2.746-2.743zM25.468 24.652l1.232 1.23-.796.796-1.232-1.23.796-.796zm13.066 14.646l-1.192-1.19.796-.796 1.192 1.19-.796.796zM8.835 0l19.5 19.485-8.834 8.828L0 8.828 8.835 0zm-.002 1.589L5.61 4.809l.834.834-.796.796-.834-.834L1.59 8.826l17.913 17.898 3.223-3.22-.834-.834.796-.796.834.834 3.224-3.22L8.832 1.588zm35.666 34.098L64 55.173 55.165 64l-19.5-19.486 8.834-8.827zm-.002 1.589L41.3 40.471l.81.81-.796.795-.81-.81-3.25 3.247L55.168 62.41l3.25-3.247-.82-.817.797-.795.818.817 3.198-3.195-17.913-17.898zm-33.446-27.03L13.16 8.14l.794.794-2.109 2.107.794.794-.795.795-.795-.793L8.9 13.983l-.794-.794 2.149-2.147-.834-.833.796-.796.834.834zm6.236 6.231l2.109-2.107.794.794-2.11 2.107.795.794-.796.795-.794-.794-2.15 2.148-.793-.794 2.149-2.147-.795-.794.796-.795.794.793zm29.468 31.036l-2.149 2.147-.794-.794 2.149-2.147-.834-.833.795-.796.835.834 2.109-2.108.794.794-2.11 2.108.795.793-.796.795-.794-.793zm6.236 6.23l-2.15 2.148-.794-.794 2.15-2.147-.835-.834.796-.795.834.833 2.11-2.107.794.794-2.11 2.107.795.794-.796.795-.794-.794z"/></svg>
                  </span>
                </div>
                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Satellites to understand</h3>
                <p class="mt-5 text-base text-silver-700">
                  Data analytics leads to a deeper understanding of your organization.
                </p>
              </div>
            </div>
          </div>
          <div class="pt-12">
            <div class="h-full flow-root bg-onyx-500 rounded-lg px-6 pb-8">
              <div class="-mt-12">
                <div>
                  <span class="inline-flex items-center justify-center p-4 bg-gold-500 rounded-3xl shadow-lg">
                    <svg class="h-16 w-16 text-white" viewBox="0 0 64 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M4.167 46.777l-3.072-3.07 3.733-4.686a2.155 2.155 0 011.13-.73l9.505-2.802L4.167 46.777zM17.153 59.755l3.071 3.07 4.69-3.73c.363-.284.607-.688.731-1.13l2.804-9.499-11.296 11.289z"/><path d="M4.178 39.91l1.077 1.076c.16.16.118.36-.004.482l-4.453 4.45L0 45.123l4.178-5.212zM22.425 58.712a.328.328 0 01.482-.004l1.077 1.076L18.728 64l-.797-.797 4.494-4.492z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M9.736 50.562l-3.192-3.19L47.113 6.832c3.482-3.48 8.16-5.764 13.592-6.648l1.046-.168c.483-.084 1.084.193 1.563.671.478.478.755 1.079.671 1.561l-.168 1.046c-.845 5.468-3.17 10.104-6.652 13.583L16.597 57.42l-3.271-3.27 3.32-3.317c.323-.324.607-.687.852-1.09l4.438-7.785-7.79 4.436a5.727 5.727 0 00-1.09.851l-3.32 3.318zM50.48 6.13l7.285 7.28c1.65-1.942 2.862-4.322 3.546-6.994l-3.861-3.86c-2.674.684-4.998 1.895-6.97 3.574zm-.034 5.085l4.758 4.755-1.206 1.204-4.757-4.754 1.205-1.205zm-2.41 2.41l4.757 4.754-1.205 1.204-4.758-4.754 1.206-1.205z"/><path d="M12.76 49.054c.082-.081.163-.162.283-.123.12.04.2.039.28.119l1.636 1.634c.08.08.12.2.119.28a.44.44 0 01-.123.282l-4.932 3.973-1.117-1.117 3.855-5.048z"/></svg>
                  </span>
                </div>
                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Launches to innovate</h3>
                <p class="mt-5 text-base text-silver-700">
                  Custom software increases your capacity to deliver impact.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<x-cta.case-studies :case-studies="$case_studies" />
<x-cta.meeting class="pt-16" team />
<x-footer />
@endsection
