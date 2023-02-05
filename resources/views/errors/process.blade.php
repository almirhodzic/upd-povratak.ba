@extends('layouts.error')

@section('content')
   <section class="section section-lg bg-white wow fadeIn" style="margin-top: -30px">
      <div class="shell">
         <div class="range range-md-top range-30">
            <div class="cell-md-4 wow fadeIn" data-wow-delay=".1s">
               <h3>503</h3>
               <div>
                  <table>
                     <tbody>
                     <tr>
                        <td style="padding-left:0; color:#001515;border:none !important;">
                           <h5>Process-Modus</h5>
                           <p>Unsere Webseite befindet sich in einem Update-Process!<br>
                              Wir sind bald wieder erreichbar. Danke für Ihre Geduld!</p>
                           <p style="margin-top: 25px;">{{ config('site.companyname') }}</p>
                        </td>
                     </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
   </section>
@endsection
