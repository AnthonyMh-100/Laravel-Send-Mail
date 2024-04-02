
@extends('base')

@section('content')

<div class="container-box">
    <section>
        <div class="box1">
            <h1>EmpresaGalaxy Print SAC</h1>
           <span class="span__1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quisquam atque, voluptatibus rerum ut, consequatur molestiae eaque dolore laborum dignissimos neque? Voluptatibus molestias atque dicta corrupti illo commodi saepe ullam!</p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quo odit pariatur exercitationem maiores! Ullam veritatis totam corporis neque ut delectus. Nulla dolorem quia nesciunt culpa dignissimos dolor perspiciatis asperiores.
            </p>
           </span>
           <span class="span__2">
            <div>
                <h2>Requeriminetos</h2>
                <ul>
                    <li>- Requeriminetos de imprenta 1</li>
                    <li>- Requeriminetos de imprenta 2</li>
                    <li>- Requeriminetos de imprenta 3</li>
                    <li>- Requeriminetos de imprenta 4</li>
                </ul>
            </div>
            <div>
                <h2>Beneficios</h2>
                <ul>
                    <li>- Beneficio de imprenta 1</li>
                    <li>- Beneficio de imprenta 2</li>
                    <li>- Beneficio de imprenta 3</li>
                    <li>- Beneficio de imprenta 4</li>
                </ul>
            </div>
            
           </span>
           <span class="span__3">
                <h3>Nuestras Redes Sociales</h3>
                <ul>
                    <li><a href=""><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                      </svg>
                      </a></li>
                    <li><a href="">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z" clip-rule="evenodd"/>
                          </svg>
                          </a></li>
                    <li><a href="">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/>
                          </svg>
                          </a></li>
                </ul>
           </span>
        </div>
        <div class="box2">
            <div>
                <img src="{{asset('img/print1.avif')}}" alt="print1" srcset="">
            </div>
            <div>
                <img src="{{asset('img/print2.jpg')}}"  alt="print2" srcset="">
            </div>
            <div>
                <img src="{{asset('img/print3.avif')}}" alt="print3" srcset="">
            </div>
            <div>
                <img src="{{asset('img/print4.webp')}}" alt="print4" srcset="">
            </div>
        </div>
    </section>

    <section>
        <footer>
            <a href="{{route('getCurriculum')}}">Envia tu curriculum</a>
        </footer>
    </section>
   
</div>

@endsection

