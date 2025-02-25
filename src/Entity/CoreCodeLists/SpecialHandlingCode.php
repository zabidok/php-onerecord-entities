<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Open code list corresponding to cXML code lists 1.16 Special Handling Codes, 1.14 Dangerous Goods Codes and 1.103 Security Statuses. Note that the codes from 1.14 and 1.103 have different IRI prefixes
 * Source of DGR codes: Dangerous Goods Regulations, 46th Edition
 *
 * Options:
 * 1. CAO – Cargo Aircraft Only
 * 2. EBI – Lithium ion batteries excepted as per Section II of PI 965
 * 3. EBM – Lithium metal batteries excepted as per Section II of PI 968
 * 4. ELI – Lithium Ion Batteries otherwise excepted from the IATA DGR
 * 5. ELM – Lithium Metal Batteries otherwise excepted from the IATA DGR
 * 6. ICE – Dry Ice
 * 7. MAG – Magnetized Material
 * 8. RBI – Fully regulated lithium ion batteries (Class 9, UN 3480) as per Section IA and IB of PI 965
 * 9. RBM – Fully regulated lithium metal batteries (Class 9, UN 3090) as per Section IA and IB of PI 968
 * 10. RCL – Cryogenic Liquids
 * 11. RCM – Corrosive
 * 12. RCX – Explosives 1.3C
 * 13. REX – To be reserved for normally forbidden Explosives, Divisions 1.1, 1.2, 1.3, 1.4F, 1.5 and 1.6
 * 14. RFG – Flammable Gas
 * 15. RFL – Flammable Liquid
 * 16. RFS – Flammable Solid
 * 17. RFW – Dangerous When Wet
 * 18. RGX – Explosives 1.3G
 * 19. RIS – Infectious Substance
 * 20. RLI – Fully Regulated Lithium Ion Batteries (Class 9)
 * 21. RLM – Fully Regulated Lithium Metal Batteries (Class 9)
 * 22. RMD – Miscellaneous Dangerous Goods
 * 23. RNG – Non-Flammable Non-Toxic Gas
 * 24. ROP – Organic Peroxide
 * 25. ROX – Oxidizer
 * 26. RPB – Toxic Substance
 * 27. RPG – Toxic Gas
 * 28. RRW – Radioactive Material Category I-White
 * 29. RRY – Radioactive Material Categories II-Yellow and III-Yellow
 * 30. RSB – Polymeric Beads
 * 31. RSC – Spontaneously Combustible
 * 32. RXB – Explosives 1.4B
 * 33. RXC – Explosives 1.4C
 * 34. RXD – Explosives 1.4D
 * 35. RXE – Explosives 1.4E
 * 36. RXG – Explosives 1.4G
 * 37. RXS – Explosives 1.4S
 * 38. NSC – Cargo Has Not Been Secured Yet for Passenger or All-Cargo Aircraft
 * 39. SCO – Cargo Secure for All-Cargo Aircraft Only
 * 40. SHR – Secure for Passenger, All-Cargo and All-Mail Aircraft in Accordance with High Risk Requirements
 * 41. SPX – Cargo Secure for Passenger and All-Cargo Aircraft
 * 42. ACT – Active Temperature Controlled System
 * 43. AOG – Aircraft on Ground
 * 44. ATT – Goods Attached to Air Waybill
 * 45. AVI – Live Animal
 * 46. BIG – Outsized
 * 47. BUP – Bulk Unitization Programme, Shipper/Consignee Handled Unit
 * 48. CAT – Cargo Attendant Accompanying Shipment
 * 49. CIC – Cargo may be loaded in the passenger cabin
 * 50. COL – Cool Goods
 * 51. COM – Company Mail
 * 52. CRT – Control Room Temperature +15°C to +25°C
 * 53. DIP – Diplomatic Mail
 * 54. EAP – e-freight Consignment with Accompanying Paper Documents
 * 55. EAT – Foodstuffs
 * 56. EAW – e-freight Consignment with No Accompanying Paper Documents
 * 57. ECC – Consignment established with an electronically concluded cargo contract with no accompanying paper airwaybill
 * 58. ECP – Consignment established with a paper air waybill contract being printed under an e-AWB agreement
 * 59. EMD – Electronic Monitoring Devices on/in Cargo/Container
 * 60. ERT – Extended Room Temperature +2°C to +25°C
 * 61. FIL – Undeveloped/Unexposed Film
 * 62. FRI – Frozen Goods Subject to Veterinary/Phytosanitary Inspections
 * 63. FRO – Frozen Goods
 * 64. GOH – Hanging Garments
 * 65. HEA – Heavy Cargo/150 kilograms and over per piece
 * 66. HEG – Hatching Eggs
 * 67. HUM – Human Remains in Coffin
 * 68. LHO – Living Human Organs/Blood
 * 69. LIC – License Required
 * 70. MAL – Mail
 * 71. MUW – Munitions of War
 * 72. NST – Non Stackable Cargo
 * 73. NWP – Newspapers, Magazines
 * 74. OBX – Obnoxious Cargo
 * 75. OHG – Overhang Item
 * 76. PAC – Passenger and Cargo
 * 77. PEA – Hunting trophies, skin, hide and all articles made from or containing parts of species listed in the CITES (Convention on International Trade in Endangered Species) appendices
 * 78. PEB – Animal products for non-human consumption
 * 79. PEF – Flowers
 * 80. PEM – Meat
 * 81. PEP – Fruits and Vegetables
 * 82. PER – Perishable Cargo
 * 83. PES – Fish/Seafood
 * 84. PHY – Goods subject to phytosanitary inspections
 * 85. PIL – Pharmaceuticals
 * 86. PIP – Passive Insulated Packaging
 * 87. QRT – Quick Ramp Transfer
 * 88. RAC – Reserved Air Cargo
 * 89. RDS – Diagnostic Specimens
 * 90. REQ – Excepted Quantities of Dangerous Goods
 * 91. RRE – Excepted Quantities of Radioactive Material
 * 92. SHL – Save Human Life
 * 93. SPF – Laboratory Animals
 * 94. SUR – Surface Transportation
 * 95. SWP – Sporting Weapons
 * 96. VAL – Valuable Cargo
 * 97. VIC – Very Important Cargo
 * 98. VOL – Volume
 * 99. VUN – Vulnerable Cargo
 * 100. WET – Shipments of Wet Material not Packed in Watertight Containers
 * 101. XPS – Priority Small Package
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode Ontology
 */
#[Version('1.0.1')]
enum SpecialHandlingCode: string
{
    /**
     * Cargo Aircraft Only
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_CAO Ontology
     */
    case CAO = 'CAO';

    /**
     * Lithium ion batteries excepted as per Section II of PI 965
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_EBI Ontology
     */
    case EBI = 'EBI';

    /**
     * Lithium metal batteries excepted as per Section II of PI 968
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_EBM Ontology
     */
    case EBM = 'EBM';

    /**
     * Lithium Ion Batteries otherwise excepted from the IATA DGR
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_ELI Ontology
     */
    case ELI = 'ELI';

    /**
     * Lithium Metal Batteries otherwise excepted from the IATA DGR
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_ELM Ontology
     */
    case ELM = 'ELM';

    /**
     * Dry Ice
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_ICE Ontology
     */
    case ICE = 'ICE';

    /**
     * Magnetized Material
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_MAG Ontology
     */
    case MAG = 'MAG';

    /**
     * Fully regulated lithium ion batteries (Class 9, UN 3480) as per Section IA and IB of PI 965
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RBI Ontology
     */
    case RBI = 'RBI';

    /**
     * Fully regulated lithium metal batteries (Class 9, UN 3090) as per Section IA and IB of PI 968
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RBM Ontology
     */
    case RBM = 'RBM';

    /**
     * Cryogenic Liquids
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RCL Ontology
     */
    case RCL = 'RCL';

    /**
     * Corrosive
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RCM Ontology
     */
    case RCM = 'RCM';

    /**
     * Explosives 1.3C
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RCX Ontology
     */
    case RCX = 'RCX';

    /**
     * To be reserved for normally forbidden Explosives, Divisions 1.1, 1.2, 1.3, 1.4F, 1.5 and 1.6
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_REX Ontology
     */
    case REX = 'REX';

    /**
     * Flammable Gas
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RFG Ontology
     */
    case RFG = 'RFG';

    /**
     * Flammable Liquid
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RFL Ontology
     */
    case RFL = 'RFL';

    /**
     * Flammable Solid
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RFS Ontology
     */
    case RFS = 'RFS';

    /**
     * Dangerous When Wet
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RFW Ontology
     */
    case RFW = 'RFW';

    /**
     * Explosives 1.3G
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RGX Ontology
     */
    case RGX = 'RGX';

    /**
     * Infectious Substance
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RIS Ontology
     */
    case RIS = 'RIS';

    /**
     * Fully Regulated Lithium Ion Batteries (Class 9)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RLI Ontology
     */
    case RLI = 'RLI';

    /**
     * Fully Regulated Lithium Metal Batteries (Class 9)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RLM Ontology
     */
    case RLM = 'RLM';

    /**
     * Miscellaneous Dangerous Goods
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RMD Ontology
     */
    case RMD = 'RMD';

    /**
     * Non-Flammable Non-Toxic Gas
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RNG Ontology
     */
    case RNG = 'RNG';

    /**
     * Organic Peroxide
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_ROP Ontology
     */
    case ROP = 'ROP';

    /**
     * Oxidizer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_ROX Ontology
     */
    case ROX = 'ROX';

    /**
     * Toxic Substance
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RPB Ontology
     */
    case RPB = 'RPB';

    /**
     * Toxic Gas
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RPG Ontology
     */
    case RPG = 'RPG';

    /**
     * Radioactive Material Category I-White
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RRW Ontology
     */
    case RRW = 'RRW';

    /**
     * Radioactive Material Categories II-Yellow and III-Yellow
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RRY Ontology
     */
    case RRY = 'RRY';

    /**
     * Polymeric Beads
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RSB Ontology
     */
    case RSB = 'RSB';

    /**
     * Spontaneously Combustible
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RSC Ontology
     */
    case RSC = 'RSC';

    /**
     * Explosives 1.4B
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RXB Ontology
     */
    case RXB = 'RXB';

    /**
     * Explosives 1.4C
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RXC Ontology
     */
    case RXC = 'RXC';

    /**
     * Explosives 1.4D
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RXD Ontology
     */
    case RXD = 'RXD';

    /**
     * Explosives 1.4E
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RXE Ontology
     */
    case RXE = 'RXE';

    /**
     * Explosives 1.4G
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RXG Ontology
     */
    case RXG = 'RXG';

    /**
     * Explosives 1.4S
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#DangerousGoodsCode_RXS Ontology
     */
    case RXS = 'RXS';

    /**
     * Cargo Has Not Been Secured Yet for Passenger or All-Cargo Aircraft
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SecurityStatus_NSC Ontology
     */
    case NSC = 'NSC';

    /**
     * Cargo Secure for All-Cargo Aircraft Only
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SecurityStatus_SCO Ontology
     */
    case SCO = 'SCO';

    /**
     * Secure for Passenger, All-Cargo and All-Mail Aircraft in Accordance with High Risk Requirements
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SecurityStatus_SHR Ontology
     */
    case SHR = 'SHR';

    /**
     * Cargo Secure for Passenger and All-Cargo Aircraft
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SecurityStatus_SPX Ontology
     */
    case SPX = 'SPX';

    /**
     * Active Temperature Controlled System
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_ACT Ontology
     */
    case ACT = 'ACT';

    /**
     * Aircraft on Ground
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_AOG Ontology
     */
    case AOG = 'AOG';

    /**
     * Goods Attached to Air Waybill
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_ATT Ontology
     */
    case ATT = 'ATT';

    /**
     * Live Animal
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_AVI Ontology
     */
    case AVI = 'AVI';

    /**
     * Outsized
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_BIG Ontology
     */
    case BIG = 'BIG';

    /**
     * Bulk Unitization Programme, Shipper/Consignee Handled Unit
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_BUP Ontology
     */
    case BUP = 'BUP';

    /**
     * Cargo Attendant Accompanying Shipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_CAT Ontology
     */
    case CAT = 'CAT';

    /**
     * Cargo may be loaded in the passenger cabin
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_CIC Ontology
     */
    case CIC = 'CIC';

    /**
     * Cool Goods
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_COL Ontology
     */
    case COL = 'COL';

    /**
     * Company Mail
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_COM Ontology
     */
    case COM = 'COM';

    /**
     * Control Room Temperature +15°C to +25°C
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_CRT Ontology
     */
    case CRT = 'CRT';

    /**
     * Diplomatic Mail
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_DIP Ontology
     */
    case DIP = 'DIP';

    /**
     * e-freight Consignment with Accompanying Paper Documents
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_EAP Ontology
     */
    case EAP = 'EAP';

    /**
     * Foodstuffs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_EAT Ontology
     */
    case EAT = 'EAT';

    /**
     * e-freight Consignment with No Accompanying Paper Documents
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_EAW Ontology
     */
    case EAW = 'EAW';

    /**
     * Consignment established with an electronically concluded cargo contract with no accompanying paper airwaybill
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_ECC Ontology
     */
    case ECC = 'ECC';

    /**
     * Consignment established with a paper air waybill contract being printed under an e-AWB agreement
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_ECP Ontology
     */
    case ECP = 'ECP';

    /**
     * Electronic Monitoring Devices on/in Cargo/Container
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_EMD Ontology
     */
    case EMD = 'EMD';

    /**
     * Extended Room Temperature +2°C to +25°C
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_ERT Ontology
     */
    case ERT = 'ERT';

    /**
     * Undeveloped/Unexposed Film
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_FIL Ontology
     */
    case FIL = 'FIL';

    /**
     * Frozen Goods Subject to Veterinary/Phytosanitary Inspections
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_FRI Ontology
     */
    case FRI = 'FRI';

    /**
     * Frozen Goods
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_FRO Ontology
     */
    case FRO = 'FRO';

    /**
     * Hanging Garments
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_GOH Ontology
     */
    case GOH = 'GOH';

    /**
     * Heavy Cargo/150 kilograms and over per piece
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_HEA Ontology
     */
    case HEA = 'HEA';

    /**
     * Hatching Eggs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_HEG Ontology
     */
    case HEG = 'HEG';

    /**
     * Human Remains in Coffin
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_HUM Ontology
     */
    case HUM = 'HUM';

    /**
     * Living Human Organs/Blood
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_LHO Ontology
     */
    case LHO = 'LHO';

    /**
     * License Required
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_LIC Ontology
     */
    case LIC = 'LIC';

    /**
     * Mail
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_MAL Ontology
     */
    case MAL = 'MAL';

    /**
     * Munitions of War
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_MUW Ontology
     */
    case MUW = 'MUW';

    /**
     * Non Stackable Cargo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_NST Ontology
     */
    case NST = 'NST';

    /**
     * Newspapers, Magazines
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_NWP Ontology
     */
    case NWP = 'NWP';

    /**
     * Obnoxious Cargo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_OBX Ontology
     */
    case OBX = 'OBX';

    /**
     * Overhang Item
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_OHG Ontology
     */
    case OHG = 'OHG';

    /**
     * Passenger and Cargo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_PAC Ontology
     */
    case PAC = 'PAC';

    /**
     * Hunting trophies, skin, hide and all articles made from or containing parts of species listed in the CITES (Convention on International Trade in Endangered Species) appendices
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_PEA Ontology
     */
    case PEA = 'PEA';

    /**
     * Animal products for non-human consumption
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_PEB Ontology
     */
    case PEB = 'PEB';

    /**
     * Flowers
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_PEF Ontology
     */
    case PEF = 'PEF';

    /**
     * Meat
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_PEM Ontology
     */
    case PEM = 'PEM';

    /**
     * Fruits and Vegetables
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_PEP Ontology
     */
    case PEP = 'PEP';

    /**
     * Perishable Cargo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_PER Ontology
     */
    case PER = 'PER';

    /**
     * Fish/Seafood
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_PES Ontology
     */
    case PES = 'PES';

    /**
     * Goods subject to phytosanitary inspections
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_PHY Ontology
     */
    case PHY = 'PHY';

    /**
     * Pharmaceuticals
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_PIL Ontology
     */
    case PIL = 'PIL';

    /**
     * Passive Insulated Packaging
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_PIP Ontology
     */
    case PIP = 'PIP';

    /**
     * Quick Ramp Transfer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_QRT Ontology
     */
    case QRT = 'QRT';

    /**
     * Reserved Air Cargo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_RAC Ontology
     */
    case RAC = 'RAC';

    /**
     * Diagnostic Specimens
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_RDS Ontology
     */
    case RDS = 'RDS';

    /**
     * Excepted Quantities of Dangerous Goods
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_REQ Ontology
     */
    case REQ = 'REQ';

    /**
     * Excepted Quantities of Radioactive Material
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_RRE Ontology
     */
    case RRE = 'RRE';

    /**
     * Save Human Life
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_SHL Ontology
     */
    case SHL = 'SHL';

    /**
     * Laboratory Animals
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_SPF Ontology
     */
    case SPF = 'SPF';

    /**
     * Surface Transportation
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_SUR Ontology
     */
    case SUR = 'SUR';

    /**
     * Sporting Weapons
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_SWP Ontology
     */
    case SWP = 'SWP';

    /**
     * Valuable Cargo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_VAL Ontology
     */
    case VAL = 'VAL';

    /**
     * Very Important Cargo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_VIC Ontology
     */
    case VIC = 'VIC';

    /**
     * Volume
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_VOL Ontology
     */
    case VOL = 'VOL';

    /**
     * Vulnerable Cargo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_VUN Ontology
     */
    case VUN = 'VUN';

    /**
     * Shipments of Wet Material not Packed in Watertight Containers
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_WET Ontology
     */
    case WET = 'WET';

    /**
     * Priority Small Package
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#SpecialHandlingCode_XPS Ontology
     */
    case XPS = 'XPS';
}
