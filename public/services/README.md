# Service Images

This directory contains images for all Hajj Help services referenced in the database seeders.

## Image Files

All images are stored in `/public/services/` and are referenced in the database with URLs like `/services/image_name.jpg`.

### Categories and Images:

**Hajj Application Process:**
- visit_agent.jpg
- prepare_documents.jpg  
- payment_method.jpg
- setup_hotel.jpg

**Terms and Policies:**
- hajj_guidelines.jpg
- visa_requirements.jpg
- health_regulations.jpg
- financial_policies.jpg

**Religious Places:**
- kaaba_haram.jpg
- mount_arafat.jpg
- muzdalifah.jpg
- mina_jamarat.jpg
- masjid_nabawi.jpg
- mount_uhud.jpg

**Hajj Procedures:**
- ihram_preparation.jpg
- tawaf_procedure.jpg
- sai_procedure.jpg
- day_arafat.jpg
- stoning_jamarat.jpg
- sacrifice_ritual.jpg

**Medical Help:**
- king_abdullah_medical.jpg
- ajyad_hospital.jpg
- madinah_hospital.jpg
- mobile_medical.jpg
- pharmacy_services.jpg

**Hotel Routes:**
- makkah_hilton_route.jpg
- fairmont_route.jpg
- conrad_route.jpg
- movenpick_route.jpg
- general_navigation.jpg

## Usage

Images are served by Laravel from the `public/services/` directory and can be accessed via:
`https://your-domain.com/services/image_name.jpg`

## Generated

Images were downloaded automatically using a PHP script that pulled appropriate placeholder images from Unsplash.
