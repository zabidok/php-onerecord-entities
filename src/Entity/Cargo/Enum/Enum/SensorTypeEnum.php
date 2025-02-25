<?php

namespace Zabidok\OneRecordEntities\Entity\Cargo\Enum\Enum;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Open code list for sensor types
 *
 * Options:
 * 1. ACCELEROMETER – Indicates the sensor type as accelerometer
 * 2. GEOLOCATION – Indicates the sensor type as geolocation
 * 3. HUMIDITY – Indicates the sensor type as humidity
 * 4. LIGHT – Indicates the sensor type as light
 * 5. PRESSURE – Indicates the sensor type as pressure
 * 6. THERMOMETER – Indicates the sensor type as thermometer
 * 7. TILT – Indicates the sensor type as tilt
 * 8. VIBRATION – Indicates the sensor type as vibration
 *
 * @link https://onerecord.iata.org/ns/cargo#SensorType Ontology
 */
#[Version('3.1 RC1')]
enum SensorTypeEnum: string
{
    /**
     * Indicates the sensor type as accelerometer
     *
     * @link https://onerecord.iata.org/ns/cargo#ACCELEROMETER Ontology
     */
    case ACCELEROMETER = 'ACCELEROMETER';

    /**
     * Indicates the sensor type as geolocation
     *
     * @link https://onerecord.iata.org/ns/cargo#GEOLOCATION Ontology
     */
    case GEOLOCATION = 'GEOLOCATION';

    /**
     * Indicates the sensor type as humidity
     *
     * @link https://onerecord.iata.org/ns/cargo#HUMIDITY Ontology
     */
    case HUMIDITY = 'HUMIDITY';

    /**
     * Indicates the sensor type as light
     *
     * @link https://onerecord.iata.org/ns/cargo#LIGHT Ontology
     */
    case LIGHT = 'LIGHT';

    /**
     * Indicates the sensor type as pressure
     *
     * @link https://onerecord.iata.org/ns/cargo#PRESSURE Ontology
     */
    case PRESSURE = 'PRESSURE';

    /**
     * Indicates the sensor type as thermometer
     *
     * @link https://onerecord.iata.org/ns/cargo#THERMOMETER Ontology
     */
    case THERMOMETER = 'THERMOMETER';

    /**
     * Indicates the sensor type as tilt
     *
     * @link https://onerecord.iata.org/ns/cargo#TILT Ontology
     */
    case TILT = 'TILT';

    /**
     * Indicates the sensor type as vibration
     *
     * @link https://onerecord.iata.org/ns/cargo#VIBRATION Ontology
     */
    case VIBRATION = 'VIBRATION';
}
