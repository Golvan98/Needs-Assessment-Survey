<x-layout>


<div id="body" class="bg-gray-300 flex-auto"> 

    <div class="bg-gray-500 mt-16">     

    
        <article class="bg-gray-300 flex-auto text-black font-bold py-3"> &nbsp &nbsp &nbsp  Good Evening, Counselor!
            <div class="">    </div>
            <div class="mt-2 border border-red-500"></div>
        
        </article>

    </div>


    <article class="bg-white">
      
    <div class="bg-gray-100 border border-black mt-2 ">
        <table class="mx-auto mt-2">
              
               
                
                <tr class="space-x-8">

    

                @foreach($surveyquestioncategories as $surveyquestioncategory)  
                               
                    
                                 
                <th> <a href="/surveydata/{{$surveyquestioncategory}}"> <button  class="w-48 h-12 bg-gray-300 ml-2 mr-24 rounded-xl"> {{$surveyquestioncategory}}	</th> </a>
                @if($loop->iteration %4 ==0)
                <tr>
                    @else
                    

                    @endif
                                        
                    
                @endforeach
                   
            
            
       

                </tr>

        </table>
        <br>
        <a href="{{ url()->previous() }}"> <button class="ml-8 w-24 h-6 bg-green-500 text-white font-bold mb-2 "> Get Back </button>
    </div>

    </article>

    

</div>








</x-layout>