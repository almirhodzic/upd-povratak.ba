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
      <td colspan="2"><b>{{ $appname }}</b><br>Verfikacijski link za Članstvo</td>
   </tr>
   <tr>
      <td colspan="2"><hr></td>
   </tr>
   <tr>
       <td colspan="2">Poštovani/a, uspješno ste podnijeli Zahtjev za Članstvo {{ $appname }}. Da bi se pokrenuo proces, potrebno je da verificirate Vašu eMail adresu. Kliknite na link ispod u ovoj poruci.<br>Zahtjevi bez verifikacije se neće uzimati u obzir.<br><br></td>
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
      <td valign="top">Verfikacijski link</td>
      <td valign="top"><a href="{{ route('member.verifyemail', $token) }}">Kliknite ovde</a></td>
   </tr>
   <tr>
       <td colspan="2"><hr></td>
   </tr>
   <tr>
       <td colspan="2">Na ovu poruku ne možete odgovoriti. Ako imate pitanja u vezi Članstva ili želite stupiti sa nama u kontakt posjetite <a href="{{ $appurl }}/contact">našu web stranicu</a> gdje će te naći mogućnosti uspostavljanje kontakta sa nama.<br><br>{{ $appname }}</td>
   </tr>
   </tbody>
</table>
