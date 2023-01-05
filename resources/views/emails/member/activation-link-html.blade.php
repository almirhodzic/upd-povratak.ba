<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700" style="font-size:16px !important;">
   <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
   <tr>
      <td colspan="2">
         <img src="{{ $logourl }}" width="150">
      </td>
   </tr>
   <tr>
      <td colspan="2" height="15"></td>
   </tr>
   <tr>
      <td colspan="2"><b>{{ $appname }}</b><br>Aktivacijski Link za Clanstvo</td>
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
      <td valign="top" width="450">{{ $member_name }}</td>
   </tr>
   <tr>
      <td valign="top">eMail adresa</td>
      <td valign="top">{{ $member_email }}</td>
   </tr>
   <tr>
      <td colspan="2"><hr></td>
   </tr>
   <tr>
      <td valign="top">Aktivacijski link</td>
      <td valign="top"><a href="{{ route('member.verifyemail', $token) }}">Potvrdi eMail adresu</a></td>
   </tr>
   </tbody>
</table>