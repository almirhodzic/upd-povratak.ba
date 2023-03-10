<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700" style="font-size:16px !important;">
   <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
   <tr><td colspan="2"><img src="{{ $logourl }}" width="150"></td></tr>
   <tr><td colspan="2" height="15"></td></tr><tr><td colspan="2"><b>{{ $appname }}</b><br>Email adresa verificirana</td></tr>
   <tr><td colspan="2"><hr></td></tr>
   <tr><td colspan="2">Poštovni/a, uspješno ste verificirali Vašu eMail-adresu. Zahvaljujemo se!<br><br></td></tr>
   <tr><td valign="top" width="200">Datum</td><td valign="top" width="400">{{ date('d.m.Y - H:i:s') }}</td></tr>
   <tr><td valign="top">Id Zahtjeva</td><td valign="top">{{ $memberId }}</td></tr>
   <tr><td valign="top">Ime i prezime</td><td valign="top">{{ $memberName }}</td></tr>
   <tr><td valign="top">Ulica i broj ({{ $memberCountry }})</td><td valign="top">{{ $memberStreet }}</td></tr>
   <tr><td valign="top">Postanski broj ({{ $memberCountry }})</td><td valign="top">{{ $memberPostcode }}</td></tr>
   <tr><td valign="top">Opcina ({{ $memberCountry }})</td><td valign="top">{{ $memberCity }}</td></tr>
   <tr><td valign="top">Drzava</td><td valign="top">{{ $memberCountry }}</td></tr>
   <tr><td valign="top">Tel. broj (BiH)</td><td valign="top">{{ $memberPhone }}</td></tr>
   <tr><td valign="top">Tel. broj (Dijaspora)</td><td valign="top">{{ $memberPhoneDijsaspora }}</td></tr>
   <tr><td valign="top">eMail adresa</td><td valign="top">{{ $memberEmail }}</td></tr>
   <tr><td colspan="2"><hr></td></tr>
   <tr><td valign="top">Vaša poruka</td><td valign="top">{{ $memberMessage }}</td></tr>
   <tr><td colspan="2"><hr></td></tr>
   <tr><td colspan="2">Javićemo Vam se što priije sa informacijama vezano za zahtjev.<br><br>{{ $appname }}</td></tr>
   </tbody>
</table>
