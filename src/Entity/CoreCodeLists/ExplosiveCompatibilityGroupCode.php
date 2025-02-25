<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list based on DGR Table 3.1.A
 * Source: DGR Table 3.1.A Compatibility group for explosives
 *
 * Options:
 * 1. A – Primary explosive substance (Hazard Division 1.1)
 * 2. B – Article containing a primary explosive substance and not containing two or more effective protective features. Some articles, such as detonators for blasting, detonator assemblies for blasting and primers, cap type, are included, even though they do not contain primary explosives (Hazard Division 1.1; 1.2; 1.4)
 * 3. C – Propellant explosive substance or other deflagrating explosive substance or article containing such explosive substance (Hazard Division 1.1; 1.2; 1.3; 1.4)
 * 4. D – Secondary detonating explosive substance or black powder or article containing a secondary detonating explosive substance, in each case without means of initiation and without a propelling charge or article containing a primary explosive substance and containing two or more effective protective features (Hazard Division 1.1; 1.2; 1.4; 1.5)
 * 5. E – Article containing a secondary detonating explosive substance, without means of initiation, with a propelling charge (other than one containing a flammable liquid or gel or hypergolic liquids) or without a propelling charge (Hazard Division 1.1; 1.2; 1.4)
 * 6. F – Article containing a secondary detonating explosive substance, with its own means of initiation, with a propelling charge (other than one containing a flammable liquid or gel or hypergolic liquids) or without a propelling charge (Hazard Division 1.1; 1.2; 1.3; 1.4)
 * 7. G – Pyrotechnic substance, or article containing a pyrotechnic substance, or article containing both an explosive substance and an illuminating, incendiary, tear- or smoke-producing substance (other than a water -activated article or one containing white phosphorus, phosphide, a pyrophoric substance, a flammable liquid or get or hypergolic liquids) (Hazard Division 1.1; 1.2; 1.3; 1.4)
 * 8. H – Article containing both an explosive substance and white phosphorus (Hazard Division 1.2; 1.3)
 * 9. J – Article containing both an explosive substance and a flammable liquid or gel (Hazard Division 1.1; 1.2; 1.3)
 * 10. K – Article containing both an explosive substance and a toxic chemical agent (Hazard Division 1.1; 1.3)
 * 11. L – Explosive article or substance containing an explosive substance and presenting a special risk (e.g. due to water activation, or the presence of hypergolic liquids, phosphides or a pyrophoric substance) and needing isolation of each type (Hazard Division 1.2; 1.2; 1.3)
 * 12. N – Article containing only extremely insensitive detonating substances (Hazard Division 1.6)
 * 13. S – Article or substance so packed or designed that any hazardous effects arising from accidental functioning are confined within the package unless the package has been degraded by fire, in which case all blast or projection effects are limited to the extent that they do not significantly hinder or prohibit fire fighting or other emergency response efforts in the immediate vicinity of the package (Hazard Division 1.4)
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode Ontology
 */
#[Version('1.0.1')]
enum ExplosiveCompatibilityGroupCode: string
{
    /**
     * Primary explosive substance (Hazard Division 1.1)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_A Ontology
     */
    case A = 'A';

    /**
     * Article containing a primary explosive substance and not containing two or more effective protective features. Some articles, such as detonators for blasting, detonator assemblies for blasting and primers, cap type, are included, even though they do not contain primary explosives (Hazard Division 1.1; 1.2; 1.4)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_B Ontology
     */
    case B = 'B';

    /**
     * Propellant explosive substance or other deflagrating explosive substance or article containing such explosive substance (Hazard Division 1.1; 1.2; 1.3; 1.4)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_C Ontology
     */
    case C = 'C';

    /**
     * Secondary detonating explosive substance or black powder or article containing a secondary detonating explosive substance, in each case without means of initiation and without a propelling charge or article containing a primary explosive substance and containing two or more effective protective features (Hazard Division 1.1; 1.2; 1.4; 1.5)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_D Ontology
     */
    case D = 'D';

    /**
     * Article containing a secondary detonating explosive substance, without means of initiation, with a propelling charge (other than one containing a flammable liquid or gel or hypergolic liquids) or without a propelling charge (Hazard Division 1.1; 1.2; 1.4)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_E Ontology
     */
    case E = 'E';

    /**
     * Article containing a secondary detonating explosive substance, with its own means of initiation, with a propelling charge (other than one containing a flammable liquid or gel or hypergolic liquids) or without a propelling charge (Hazard Division 1.1; 1.2; 1.3; 1.4)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_F Ontology
     */
    case F = 'F';

    /**
     * Pyrotechnic substance, or article containing a pyrotechnic substance, or article containing both an explosive substance and an illuminating, incendiary, tear- or smoke-producing substance (other than a water -activated article or one containing white phosphorus, phosphide, a pyrophoric substance, a flammable liquid or get or hypergolic liquids) (Hazard Division 1.1; 1.2; 1.3; 1.4)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_G Ontology
     */
    case G = 'G';

    /**
     * Article containing both an explosive substance and white phosphorus (Hazard Division 1.2; 1.3)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_H Ontology
     */
    case H = 'H';

    /**
     * Article containing both an explosive substance and a flammable liquid or gel (Hazard Division 1.1; 1.2; 1.3)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_J Ontology
     */
    case J = 'J';

    /**
     * Article containing both an explosive substance and a toxic chemical agent (Hazard Division 1.1; 1.3)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_K Ontology
     */
    case K = 'K';

    /**
     * Explosive article or substance containing an explosive substance and presenting a special risk (e.g. due to water activation, or the presence of hypergolic liquids, phosphides or a pyrophoric substance) and needing isolation of each type (Hazard Division 1.2; 1.2; 1.3)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_L Ontology
     */
    case L = 'L';

    /**
     * Article containing only extremely insensitive detonating substances (Hazard Division 1.6)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_N Ontology
     */
    case N = 'N';

    /**
     * Article or substance so packed or designed that any hazardous effects arising from accidental functioning are confined within the package unless the package has been degraded by fire, in which case all blast or projection effects are limited to the extent that they do not significantly hinder or prohibit fire fighting or other emergency response efforts in the immediate vicinity of the package (Hazard Division 1.4)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#ExplosiveCompatibilityGroupCode_S Ontology
     */
    case S = 'S';
}
