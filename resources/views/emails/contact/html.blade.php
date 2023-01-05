<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700" style="font-size:16px !important;">
   <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
   <tr>
      <td colspan="2">
         <img src="{{ $logo }}" width="150">
      </td>
   </tr>
   <tr>
      <td colspan="2" height="15"></td>
   </tr>
   <tr>
      <td colspan="2"><b>{{ $appname }}</b><br>KONTAKT-FORMA WEBSAJT</td>
   </tr>
   <tr>
      <td colspan="2"><hr></td>
   </tr>
   <tr>
      <td valign="top" width="100">Datum</td>
      <td valign="top" width="500">{{ date('d.m.Y - H:i:s') }}</td>
   </tr>
   <tr>
      <td valign="top" width="150">Ime i prezime</td>
      <td valign="top" width="450">{{ $fromsname }}</td>
   </tr>
   <tr>
      <td valign="top">eMail adresa</td>
      <td valign="top">{{ $fromsemail }}</td>
   </tr>
   <tr>
      <td colspan="2"><hr></td>
   </tr>
   <tr>
      <td valign="top">Poruka preko forme</td>
      <td valign="top">{{ $messages }}</td>
   </tr>
   </tbody>
</table>