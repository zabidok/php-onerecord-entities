<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Open code list of currency codes based on ISO 4217
 * Source: ISO 4217
 * List source -https://www.six-group.com/dam/download/financial-information/data-center/iso-currrency/lists/list-one.xml
 *
 * Options:
 * 1. AFN – Afghani
 * 2. EUR – Euro
 * 3. ALL – Lek
 * 4. DZD – Algerian Dinar
 * 5. USD – US Dollar
 * 6. AOA – Kwanza
 * 7. XCD – East Caribbean Dollar
 * 8. ARS – Argentine Peso
 * 9. AMD – Armenian Dram
 * 10. AWG – Aruban Florin
 * 11. AUD – Australian Dollar
 * 12. AZN – Azerbaijan Manat
 * 13. BSD – Bahamian Dollar
 * 14. BHD – Bahraini Dinar
 * 15. BDT – Taka
 * 16. BBD – Barbados Dollar
 * 17. BYN – Belarusian Ruble
 * 18. BZD – Belize Dollar
 * 19. XOF – CFA Franc BCEAO
 * 20. BMD – Bermudian Dollar
 * 21. INR – Indian Rupee
 * 22. BTN – Ngultrum
 * 23. BOB – Boliviano
 * 24. BOV – Mvdol
 * 25. BAM – Convertible Mark
 * 26. BWP – Pula
 * 27. NOK – Norwegian Krone
 * 28. BRL – Brazilian Real
 * 29. BND – Brunei Dollar
 * 30. BGN – Bulgarian Lev
 * 31. BIF – Burundi Franc
 * 32. CVE – Cabo Verde Escudo
 * 33. KHR – Riel
 * 34. XAF – CFA Franc BEAC
 * 35. CAD – Canadian Dollar
 * 36. KYD – Cayman Islands Dollar
 * 37. CLP – Chilean Peso
 * 38. CLF – Unidad de Fomento
 * 39. CNY – Yuan Renminbi
 * 40. COP – Colombian Peso
 * 41. COU – Unidad de Valor Real
 * 42. KMF – Comorian Franc
 * 43. CDF – Congolese Franc
 * 44. NZD – New Zealand Dollar
 * 45. CRC – Costa Rican Colon
 * 46. CUP – Cuban Peso
 * 47. ANG – Netherlands Antillean Guilder
 * 48. CZK – Czech Koruna
 * 49. DKK – Danish Krone
 * 50. DJF – Djibouti Franc
 * 51. DOP – Dominican Peso
 * 52. EGP – Egyptian Pound
 * 53. SVC – El Salvador Colon
 * 54. ERN – Nakfa
 * 55. SZL – Lilangeni
 * 56. ETB – Ethiopian Birr
 * 57. FKP – Falkland Islands Pound
 * 58. FJD – Fiji Dollar
 * 59. XPF – CFP Franc
 * 60. GMD – Dalasi
 * 61. GEL – Lari
 * 62. GHS – Ghana Cedi
 * 63. GIP – Gibraltar Pound
 * 64. GTQ – Quetzal
 * 65. GBP – Pound Sterling
 * 66. GNF – Guinean Franc
 * 67. GYD – Guyana Dollar
 * 68. HTG – Gourde
 * 69. HNL – Lempira
 * 70. HKD – Hong Kong Dollar
 * 71. HUF – Forint
 * 72. ISK – Iceland Krona
 * 73. IDR – Rupiah
 * 74. XDR – SDR (Special Drawing Right)
 * 75. IRR – Iranian Rial
 * 76. IQD – Iraqi Dinar
 * 77. ILS – New Israeli Sheqel
 * 78. JMD – Jamaican Dollar
 * 79. JPY – Yen
 * 80. JOD – Jordanian Dinar
 * 81. KZT – Tenge
 * 82. KES – Kenyan Shilling
 * 83. KPW – North Korean Won
 * 84. KRW – Won
 * 85. KWD – Kuwaiti Dinar
 * 86. KGS – Som
 * 87. LAK – Lao Kip
 * 88. LBP – Lebanese Pound
 * 89. LSL – Loti
 * 90. ZAR – Rand
 * 91. LRD – Liberian Dollar
 * 92. LYD – Libyan Dinar
 * 93. CHF – Swiss Franc
 * 94. MOP – Pataca
 * 95. MKD – Denar
 * 96. MGA – Malagasy Ariary
 * 97. MWK – Malawi Kwacha
 * 98. MYR – Malaysian Ringgit
 * 99. MVR – Rufiyaa
 * 100. MRU – Ouguiya
 * 101. MUR – Mauritius Rupee
 * 102. XUA – ADB Unit of Account
 * 103. MXN – Mexican Peso
 * 104. MXV – Mexican Unidad de Inversion (UDI)
 * 105. MDL – Moldovan Leu
 * 106. MNT – Tugrik
 * 107. MAD – Moroccan Dirham
 * 108. MZN – Mozambique Metical
 * 109. MMK – Kyat
 * 110. NAD – Namibia Dollar
 * 111. NPR – Nepalese Rupee
 * 112. NIO – Cordoba Oro
 * 113. NGN – Naira
 * 114. OMR – Rial Omani
 * 115. PKR – Pakistan Rupee
 * 116. PAB – Balboa
 * 117. PGK – Kina
 * 118. PYG – Guarani
 * 119. PEN – Sol
 * 120. PHP – Philippine Peso
 * 121. PLN – Zloty
 * 122. QAR – Qatari Rial
 * 123. RON – Romanian Leu
 * 124. RUB – Russian Ruble
 * 125. RWF – Rwanda Franc
 * 126. SHP – Saint Helena Pound
 * 127. WST – Tala
 * 128. STN – Dobra
 * 129. SAR – Saudi Riyal
 * 130. RSD – Serbian Dinar
 * 131. SCR – Seychelles Rupee
 * 132. SLE – Leone
 * 133. SGD – Singapore Dollar
 * 134. XSU – Sucre
 * 135. SBD – Solomon Islands Dollar
 * 136. SOS – Somali Shilling
 * 137. SSP – South Sudanese Pound
 * 138. LKR – Sri Lanka Rupee
 * 139. SDG – Sudanese Pound
 * 140. SRD – Surinam Dollar
 * 141. SEK – Swedish Krona
 * 142. CHE – WIR Euro
 * 143. CHW – WIR Franc
 * 144. SYP – Syrian Pound
 * 145. TWD – New Taiwan Dollar
 * 146. TJS – Somoni
 * 147. TZS – Tanzanian Shilling
 * 148. THB – Baht
 * 149. TOP – Pa’anga
 * 150. TTD – Trinidad and Tobago Dollar
 * 151. TND – Tunisian Dinar
 * 152. TRY – Turkish Lira
 * 153. TMT – Turkmenistan New Manat
 * 154. UGX – Uganda Shilling
 * 155. UAH – Hryvnia
 * 156. AED – UAE Dirham
 * 157. USN – US Dollar (Next day)
 * 158. UYU – Peso Uruguayo
 * 159. UYI – Uruguay Peso en Unidades Indexadas (UI)
 * 160. UYW – Unidad Previsional
 * 161. UZS – Uzbekistan Sum
 * 162. VUV – Vatu
 * 163. VES – Bolívar Soberano
 * 164. VED – Bolívar Soberano
 * 165. VND – Dong
 * 166. YER – Yemeni Rial
 * 167. ZMW – Zambian Kwacha
 * 168. ZWG – Zimbabwe Gold
 * 169. XBA – Bond Markets Unit European Composite Unit (EURCO)
 * 170. XBB – Bond Markets Unit European Monetary Unit (E.M.U.-6)
 * 171. XBC – Bond Markets Unit European Unit of Account 9 (E.U.A.-9)
 * 172. XBD – Bond Markets Unit European Unit of Account 17 (E.U.A.-17)
 * 173. XTS – Codes specifically reserved for testing purposes
 * 174. XXX – The codes assigned for transactions where no currency is involved
 * 175. XAU – Gold
 * 176. XPD – Palladium
 * 177. XPT – Platinum
 * 178. XAG – Silver
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode Ontology
 */
#[Version('1.0.1')]
enum CurrencyCode: string
{
    /**
     * Afghani
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_AFN Ontology
     */
    case AFN = 'AFN';

    /**
     * Euro
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_EUR Ontology
     */
    case EUR = 'EUR';

    /**
     * Lek
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_ALL Ontology
     */
    case ALL = 'ALL';

    /**
     * Algerian Dinar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_DZD Ontology
     */
    case DZD = 'DZD';

    /**
     * US Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_USD Ontology
     */
    case USD = 'USD';

    /**
     * Kwanza
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_AOA Ontology
     */
    case AOA = 'AOA';

    /**
     * East Caribbean Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XCD Ontology
     */
    case XCD = 'XCD';

    /**
     * Argentine Peso
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_ARS Ontology
     */
    case ARS = 'ARS';

    /**
     * Armenian Dram
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_AMD Ontology
     */
    case AMD = 'AMD';

    /**
     * Aruban Florin
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_AWG Ontology
     */
    case AWG = 'AWG';

    /**
     * Australian Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_AUD Ontology
     */
    case AUD = 'AUD';

    /**
     * Azerbaijan Manat
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_AZN Ontology
     */
    case AZN = 'AZN';

    /**
     * Bahamian Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BSD Ontology
     */
    case BSD = 'BSD';

    /**
     * Bahraini Dinar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BHD Ontology
     */
    case BHD = 'BHD';

    /**
     * Taka
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BDT Ontology
     */
    case BDT = 'BDT';

    /**
     * Barbados Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BBD Ontology
     */
    case BBD = 'BBD';

    /**
     * Belarusian Ruble
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BYN Ontology
     */
    case BYN = 'BYN';

    /**
     * Belize Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BZD Ontology
     */
    case BZD = 'BZD';

    /**
     * CFA Franc BCEAO
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XOF Ontology
     */
    case XOF = 'XOF';

    /**
     * Bermudian Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BMD Ontology
     */
    case BMD = 'BMD';

    /**
     * Indian Rupee
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_INR Ontology
     */
    case INR = 'INR';

    /**
     * Ngultrum
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BTN Ontology
     */
    case BTN = 'BTN';

    /**
     * Boliviano
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BOB Ontology
     */
    case BOB = 'BOB';

    /**
     * Mvdol
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BOV Ontology
     */
    case BOV = 'BOV';

    /**
     * Convertible Mark
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BAM Ontology
     */
    case BAM = 'BAM';

    /**
     * Pula
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BWP Ontology
     */
    case BWP = 'BWP';

    /**
     * Norwegian Krone
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_NOK Ontology
     */
    case NOK = 'NOK';

    /**
     * Brazilian Real
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BRL Ontology
     */
    case BRL = 'BRL';

    /**
     * Brunei Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BND Ontology
     */
    case BND = 'BND';

    /**
     * Bulgarian Lev
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BGN Ontology
     */
    case BGN = 'BGN';

    /**
     * Burundi Franc
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_BIF Ontology
     */
    case BIF = 'BIF';

    /**
     * Cabo Verde Escudo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_CVE Ontology
     */
    case CVE = 'CVE';

    /**
     * Riel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_KHR Ontology
     */
    case KHR = 'KHR';

    /**
     * CFA Franc BEAC
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XAF Ontology
     */
    case XAF = 'XAF';

    /**
     * Canadian Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_CAD Ontology
     */
    case CAD = 'CAD';

    /**
     * Cayman Islands Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_KYD Ontology
     */
    case KYD = 'KYD';

    /**
     * Chilean Peso
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_CLP Ontology
     */
    case CLP = 'CLP';

    /**
     * Unidad de Fomento
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_CLF Ontology
     */
    case CLF = 'CLF';

    /**
     * Yuan Renminbi
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_CNY Ontology
     */
    case CNY = 'CNY';

    /**
     * Colombian Peso
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_COP Ontology
     */
    case COP = 'COP';

    /**
     * Unidad de Valor Real
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_COU Ontology
     */
    case COU = 'COU';

    /**
     * Comorian Franc
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_KMF Ontology
     */
    case KMF = 'KMF';

    /**
     * Congolese Franc
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_CDF Ontology
     */
    case CDF = 'CDF';

    /**
     * New Zealand Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_NZD Ontology
     */
    case NZD = 'NZD';

    /**
     * Costa Rican Colon
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_CRC Ontology
     */
    case CRC = 'CRC';

    /**
     * Cuban Peso
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_CUP Ontology
     */
    case CUP = 'CUP';

    /**
     * Netherlands Antillean Guilder
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_ANG Ontology
     */
    case ANG = 'ANG';

    /**
     * Czech Koruna
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_CZK Ontology
     */
    case CZK = 'CZK';

    /**
     * Danish Krone
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_DKK Ontology
     */
    case DKK = 'DKK';

    /**
     * Djibouti Franc
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_DJF Ontology
     */
    case DJF = 'DJF';

    /**
     * Dominican Peso
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_DOP Ontology
     */
    case DOP = 'DOP';

    /**
     * Egyptian Pound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_EGP Ontology
     */
    case EGP = 'EGP';

    /**
     * El Salvador Colon
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SVC Ontology
     */
    case SVC = 'SVC';

    /**
     * Nakfa
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_ERN Ontology
     */
    case ERN = 'ERN';

    /**
     * Lilangeni
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SZL Ontology
     */
    case SZL = 'SZL';

    /**
     * Ethiopian Birr
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_ETB Ontology
     */
    case ETB = 'ETB';

    /**
     * Falkland Islands Pound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_FKP Ontology
     */
    case FKP = 'FKP';

    /**
     * Fiji Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_FJD Ontology
     */
    case FJD = 'FJD';

    /**
     * CFP Franc
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XPF Ontology
     */
    case XPF = 'XPF';

    /**
     * Dalasi
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_GMD Ontology
     */
    case GMD = 'GMD';

    /**
     * Lari
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_GEL Ontology
     */
    case GEL = 'GEL';

    /**
     * Ghana Cedi
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_GHS Ontology
     */
    case GHS = 'GHS';

    /**
     * Gibraltar Pound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_GIP Ontology
     */
    case GIP = 'GIP';

    /**
     * Quetzal
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_GTQ Ontology
     */
    case GTQ = 'GTQ';

    /**
     * Pound Sterling
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_GBP Ontology
     */
    case GBP = 'GBP';

    /**
     * Guinean Franc
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_GNF Ontology
     */
    case GNF = 'GNF';

    /**
     * Guyana Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_GYD Ontology
     */
    case GYD = 'GYD';

    /**
     * Gourde
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_HTG Ontology
     */
    case HTG = 'HTG';

    /**
     * Lempira
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_HNL Ontology
     */
    case HNL = 'HNL';

    /**
     * Hong Kong Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_HKD Ontology
     */
    case HKD = 'HKD';

    /**
     * Forint
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_HUF Ontology
     */
    case HUF = 'HUF';

    /**
     * Iceland Krona
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_ISK Ontology
     */
    case ISK = 'ISK';

    /**
     * Rupiah
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_IDR Ontology
     */
    case IDR = 'IDR';

    /**
     * SDR (Special Drawing Right)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XDR Ontology
     */
    case XDR = 'XDR';

    /**
     * Iranian Rial
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_IRR Ontology
     */
    case IRR = 'IRR';

    /**
     * Iraqi Dinar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_IQD Ontology
     */
    case IQD = 'IQD';

    /**
     * New Israeli Sheqel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_ILS Ontology
     */
    case ILS = 'ILS';

    /**
     * Jamaican Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_JMD Ontology
     */
    case JMD = 'JMD';

    /**
     * Yen
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_JPY Ontology
     */
    case JPY = 'JPY';

    /**
     * Jordanian Dinar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_JOD Ontology
     */
    case JOD = 'JOD';

    /**
     * Tenge
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_KZT Ontology
     */
    case KZT = 'KZT';

    /**
     * Kenyan Shilling
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_KES Ontology
     */
    case KES = 'KES';

    /**
     * North Korean Won
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_KPW Ontology
     */
    case KPW = 'KPW';

    /**
     * Won
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_KRW Ontology
     */
    case KRW = 'KRW';

    /**
     * Kuwaiti Dinar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_KWD Ontology
     */
    case KWD = 'KWD';

    /**
     * Som
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_KGS Ontology
     */
    case KGS = 'KGS';

    /**
     * Lao Kip
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_LAK Ontology
     */
    case LAK = 'LAK';

    /**
     * Lebanese Pound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_LBP Ontology
     */
    case LBP = 'LBP';

    /**
     * Loti
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_LSL Ontology
     */
    case LSL = 'LSL';

    /**
     * Rand
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_ZAR Ontology
     */
    case ZAR = 'ZAR';

    /**
     * Liberian Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_LRD Ontology
     */
    case LRD = 'LRD';

    /**
     * Libyan Dinar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_LYD Ontology
     */
    case LYD = 'LYD';

    /**
     * Swiss Franc
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_CHF Ontology
     */
    case CHF = 'CHF';

    /**
     * Pataca
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MOP Ontology
     */
    case MOP = 'MOP';

    /**
     * Denar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MKD Ontology
     */
    case MKD = 'MKD';

    /**
     * Malagasy Ariary
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MGA Ontology
     */
    case MGA = 'MGA';

    /**
     * Malawi Kwacha
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MWK Ontology
     */
    case MWK = 'MWK';

    /**
     * Malaysian Ringgit
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MYR Ontology
     */
    case MYR = 'MYR';

    /**
     * Rufiyaa
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MVR Ontology
     */
    case MVR = 'MVR';

    /**
     * Ouguiya
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MRU Ontology
     */
    case MRU = 'MRU';

    /**
     * Mauritius Rupee
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MUR Ontology
     */
    case MUR = 'MUR';

    /**
     * ADB Unit of Account
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XUA Ontology
     */
    case XUA = 'XUA';

    /**
     * Mexican Peso
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MXN Ontology
     */
    case MXN = 'MXN';

    /**
     * Mexican Unidad de Inversion (UDI)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MXV Ontology
     */
    case MXV = 'MXV';

    /**
     * Moldovan Leu
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MDL Ontology
     */
    case MDL = 'MDL';

    /**
     * Tugrik
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MNT Ontology
     */
    case MNT = 'MNT';

    /**
     * Moroccan Dirham
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MAD Ontology
     */
    case MAD = 'MAD';

    /**
     * Mozambique Metical
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MZN Ontology
     */
    case MZN = 'MZN';

    /**
     * Kyat
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_MMK Ontology
     */
    case MMK = 'MMK';

    /**
     * Namibia Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_NAD Ontology
     */
    case NAD = 'NAD';

    /**
     * Nepalese Rupee
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_NPR Ontology
     */
    case NPR = 'NPR';

    /**
     * Cordoba Oro
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_NIO Ontology
     */
    case NIO = 'NIO';

    /**
     * Naira
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_NGN Ontology
     */
    case NGN = 'NGN';

    /**
     * Rial Omani
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_OMR Ontology
     */
    case OMR = 'OMR';

    /**
     * Pakistan Rupee
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_PKR Ontology
     */
    case PKR = 'PKR';

    /**
     * Balboa
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_PAB Ontology
     */
    case PAB = 'PAB';

    /**
     * Kina
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_PGK Ontology
     */
    case PGK = 'PGK';

    /**
     * Guarani
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_PYG Ontology
     */
    case PYG = 'PYG';

    /**
     * Sol
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_PEN Ontology
     */
    case PEN = 'PEN';

    /**
     * Philippine Peso
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_PHP Ontology
     */
    case PHP = 'PHP';

    /**
     * Zloty
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_PLN Ontology
     */
    case PLN = 'PLN';

    /**
     * Qatari Rial
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_QAR Ontology
     */
    case QAR = 'QAR';

    /**
     * Romanian Leu
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_RON Ontology
     */
    case RON = 'RON';

    /**
     * Russian Ruble
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_RUB Ontology
     */
    case RUB = 'RUB';

    /**
     * Rwanda Franc
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_RWF Ontology
     */
    case RWF = 'RWF';

    /**
     * Saint Helena Pound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SHP Ontology
     */
    case SHP = 'SHP';

    /**
     * Tala
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_WST Ontology
     */
    case WST = 'WST';

    /**
     * Dobra
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_STN Ontology
     */
    case STN = 'STN';

    /**
     * Saudi Riyal
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SAR Ontology
     */
    case SAR = 'SAR';

    /**
     * Serbian Dinar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_RSD Ontology
     */
    case RSD = 'RSD';

    /**
     * Seychelles Rupee
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SCR Ontology
     */
    case SCR = 'SCR';

    /**
     * Leone
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SLE Ontology
     */
    case SLE = 'SLE';

    /**
     * Singapore Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SGD Ontology
     */
    case SGD = 'SGD';

    /**
     * Sucre
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XSU Ontology
     */
    case XSU = 'XSU';

    /**
     * Solomon Islands Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SBD Ontology
     */
    case SBD = 'SBD';

    /**
     * Somali Shilling
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SOS Ontology
     */
    case SOS = 'SOS';

    /**
     * South Sudanese Pound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SSP Ontology
     */
    case SSP = 'SSP';

    /**
     * Sri Lanka Rupee
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_LKR Ontology
     */
    case LKR = 'LKR';

    /**
     * Sudanese Pound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SDG Ontology
     */
    case SDG = 'SDG';

    /**
     * Surinam Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SRD Ontology
     */
    case SRD = 'SRD';

    /**
     * Swedish Krona
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SEK Ontology
     */
    case SEK = 'SEK';

    /**
     * WIR Euro
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_CHE Ontology
     */
    case CHE = 'CHE';

    /**
     * WIR Franc
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_CHW Ontology
     */
    case CHW = 'CHW';

    /**
     * Syrian Pound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_SYP Ontology
     */
    case SYP = 'SYP';

    /**
     * New Taiwan Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_TWD Ontology
     */
    case TWD = 'TWD';

    /**
     * Somoni
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_TJS Ontology
     */
    case TJS = 'TJS';

    /**
     * Tanzanian Shilling
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_TZS Ontology
     */
    case TZS = 'TZS';

    /**
     * Baht
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_THB Ontology
     */
    case THB = 'THB';

    /**
     * Pa’anga
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_TOP Ontology
     */
    case TOP = 'TOP';

    /**
     * Trinidad and Tobago Dollar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_TTD Ontology
     */
    case TTD = 'TTD';

    /**
     * Tunisian Dinar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_TND Ontology
     */
    case TND = 'TND';

    /**
     * Turkish Lira
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_TRY Ontology
     */
    case TRY = 'TRY';

    /**
     * Turkmenistan New Manat
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_TMT Ontology
     */
    case TMT = 'TMT';

    /**
     * Uganda Shilling
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_UGX Ontology
     */
    case UGX = 'UGX';

    /**
     * Hryvnia
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_UAH Ontology
     */
    case UAH = 'UAH';

    /**
     * UAE Dirham
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_AED Ontology
     */
    case AED = 'AED';

    /**
     * US Dollar (Next day)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_USN Ontology
     */
    case USN = 'USN';

    /**
     * Peso Uruguayo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_UYU Ontology
     */
    case UYU = 'UYU';

    /**
     * Uruguay Peso en Unidades Indexadas (UI)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_UYI Ontology
     */
    case UYI = 'UYI';

    /**
     * Unidad Previsional
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_UYW Ontology
     */
    case UYW = 'UYW';

    /**
     * Uzbekistan Sum
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_UZS Ontology
     */
    case UZS = 'UZS';

    /**
     * Vatu
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_VUV Ontology
     */
    case VUV = 'VUV';

    /**
     * Bolívar Soberano
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_VES Ontology
     */
    case VES = 'VES';

    /**
     * Bolívar Soberano
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_VED Ontology
     */
    case VED = 'VED';

    /**
     * Dong
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_VND Ontology
     */
    case VND = 'VND';

    /**
     * Yemeni Rial
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_YER Ontology
     */
    case YER = 'YER';

    /**
     * Zambian Kwacha
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_ZMW Ontology
     */
    case ZMW = 'ZMW';

    /**
     * Zimbabwe Gold
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_ZWG Ontology
     */
    case ZWG = 'ZWG';

    /**
     * Bond Markets Unit European Composite Unit (EURCO)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XBA Ontology
     */
    case XBA = 'XBA';

    /**
     * Bond Markets Unit European Monetary Unit (E.M.U.-6)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XBB Ontology
     */
    case XBB = 'XBB';

    /**
     * Bond Markets Unit European Unit of Account 9 (E.U.A.-9)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XBC Ontology
     */
    case XBC = 'XBC';

    /**
     * Bond Markets Unit European Unit of Account 17 (E.U.A.-17)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XBD Ontology
     */
    case XBD = 'XBD';

    /**
     * Codes specifically reserved for testing purposes
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XTS Ontology
     */
    case XTS = 'XTS';

    /**
     * The codes assigned for transactions where no currency is involved
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XXX Ontology
     */
    case XXX = 'XXX';

    /**
     * Gold
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XAU Ontology
     */
    case XAU = 'XAU';

    /**
     * Palladium
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XPD Ontology
     */
    case XPD = 'XPD';

    /**
     * Platinum
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XPT Ontology
     */
    case XPT = 'XPT';

    /**
     * Silver
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CurrencyCode_XAG Ontology
     */
    case XAG = 'XAG';
}
