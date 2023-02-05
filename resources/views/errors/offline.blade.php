@extends('layouts.error')

@section('content')
   <section class="section section-lg bg-white wow fadeIn" style="margin-top: -30px">
      <div class="shell">
         <div class="range range-md-top range-30">
            <div class="cell-md-4 wow fadeIn" data-wow-delay=".1s">
               <h3>404</h3>
               <div>
                  <table>
                     <tbody>
                        <tr>
                           <td style="padding-left:0; color:#001515;border:none !important;">
                              <h5>Offline-Modus</h5>
                              <p>Anscheinend haben Sie einen ungültigen Link aufgerufen!<br>
                                 Bitte besuchen Sie uns auf <a href="https://hergodent.ch">https://hergodent.ch</a></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection
