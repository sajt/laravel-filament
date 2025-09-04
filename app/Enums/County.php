<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum County: string implements HasLabel
{
    case BUDAPEST = 'BUDAPEST';
    case PEST = 'PEST';
    case BARANYA = 'BARANYA';
    case BACS_KISKUN = 'BACS_KISKUN';
    case BEKES = 'BEKES';
    case BORSOD_ABAUJ_ZEMPLEN = 'BORSOD_ABAUJ_ZEMPLEN';
    case CSONGRAD = 'CSONGRAD';
    case FEJER = 'FEJER';
    case GYOR_MOSON_SOPRON = 'GYOR_MOSON_SOPRON';
    case HAJDU_BIHAR = 'HAJDU_BIHAR';
    case HEVES = 'HEVES';
    case JASZ_NAGYKUN_SZOLNOK = 'JASZ_NAGYKUN_SZOLNOK';
    case KOMAROM_ESZTERGOM = 'KOMAROM_ESZTERGOM';
    case NOGRAD = 'NOGRAD';
    case SOMOGY = 'SOMOGY';
    case SZABOLCS_SZATMAR_BEREG = 'SZABOLCS_SZATMAR_BEREG';
    case TOLNA = 'TOLNA';
    case VAS = 'VAS';
    case VESZPREM = 'VESZPREM';
    case ZALA = 'ZALA';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::BUDAPEST => 'Budapest',
            self::PEST => 'Pest',
            self::BARANYA => 'Baranya',
            self::BACS_KISKUN => 'Bács-Kiskun',
            self::BEKES => 'Békés',
            self::BORSOD_ABAUJ_ZEMPLEN => 'Borsod-Abaúj-Zemplén',
            self::CSONGRAD => 'Csongrád',
            self::FEJER => 'Fejér',
            self::GYOR_MOSON_SOPRON => 'Győr-Moson-Sopron',
            self::HAJDU_BIHAR => 'Hajdú-Bihar',
            self::HEVES => 'Heves',
            self::JASZ_NAGYKUN_SZOLNOK => 'Jász-Nagykun-Szolnok',
            self::KOMAROM_ESZTERGOM => 'Komárom-Esztergom',
            self::NOGRAD => 'Nógrád',
            self::SOMOGY => 'Somogy',
            self::SZABOLCS_SZATMAR_BEREG => 'Szabolcs-Szatmár-Bereg',
            self::TOLNA => 'Tolna',
            self::VAS => 'Vas',
            self::VESZPREM => 'Veszprém',
            self::ZALA => 'Zala',
            default => $this->value,
        };
    }
}
