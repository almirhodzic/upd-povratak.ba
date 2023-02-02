<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700" style="font-size:16px !important;">
   <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
   <tr><td colspan="2"><img src="{{ $logourl }}" width="150"></td></tr>
   <tr><td colspan="2" height="15"></td></tr><tr><td colspan="2"><b>{{ $appname }}</b><br>Novi zahtjev za Članstvo</td></tr>
   <tr><td colspan="2"><hr></td></tr>
   <tr><td valign="top" width="200">Datum eMail</td><td valign="top" width="400">{{ date('d.m.Y - H:i:s') }}</td></tr>
   <tr><td valign="top">ID Korisnika</td><td valign="top">{{ $memberId }}</td></tr>
   <tr><td valign="top">Ime i prezime</td><td valign="top">{{ $memberName }}</td></tr>
   <tr><td valign="top">Ulica i broj</td><td valign="top">{{ $memberStreet }} ({{ $memberCountry }})</td></tr>
   <tr><td valign="top">Postanski broj</td><td valign="top">{{ $memberPostcode }} ({{ $memberCountry }})</td></tr>
   <tr><td valign="top">Opcina</td><td valign="top">{{ $memberCity }} ({{ $memberCountry }})</td></tr>
   <tr><td valign="top">Drzava</td><td valign="top">{{ $memberCountry }}</td></tr>
   <tr><td valign="top">Tel. broj (BiH)</td><td valign="top">{{ $memberPhone }}</td></tr>
   <tr><td valign="top">Tel. broj (Dijaspora)</td><td valign="top">{{ $memberPhoneDijsaspora }}</td></tr>
   <tr><td valign="top">eMail adresa</td><td valign="top">{{ $memberEmail }}</td></tr>
   <tr><td valign="top">Datum registracije</td><td valign="top">{{ $memberCreatedAt }}</td></tr>
   <tr><td valign="top">Datum verifikacije</td><td valign="top">{{ $memberVerifiedAt }}</td></tr>
   <tr><td valign="top">Timezone</td><td valign="top">{{ $timezone }}</td></tr>
   <tr><td valign="top">IP-adresa</td><td valign="top">{{ $memberIp }}</td></tr>
   <tr><td colspan="2"><hr></td></tr>
   <tr><td valign="top">Poruka</td><td valign="top">{{ $memberMessage }}</td></tr>
   </tbody>
</table>
