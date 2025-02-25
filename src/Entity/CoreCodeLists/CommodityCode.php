<?php

namespace Zabidok\OneRecordEntities\Entity\CoreCodeLists;

use Zabidok\OneRecordEntities\Attribute\Version;

/**
 * Restricted code list of accepted commodities in carrier bookings when no HS code available
 *
 * Options:
 * 1. CHEM – Chemicals
 * 2. CHEM_CDGR – Chemicals - Dangerous
 * 3. CHEM_CLNG – Cleaning products
 * 4. CHEM_CNDG – Chemicals - Not dangerous
 * 5. CHEM_CNMD – Chemicals - Not Medical
 * 6. CHEM_COSM – Cosmetics
 * 7. CHEM_COSM_COSD – Cosmetics - DGR
 * 8. CHEM_COSM_PERF – Perfume
 * 9. CHEM_DGRG – Dangerous Goods
 * 10. CHEM_DGRG_EXPL – Explosives
 * 11. CHEM_DICE – Dry ice
 * 12. CHEM_PAIN – Paint
 * 13. CHEM_PETRO – Petroleum derivatives
 * 14. CHEM_RADA – Radioactive materials
 * 15. CHEM_REAG – Reagents
 * 16. CONS – Consumer goods
 * 17. CONS_CMPY – Company material
 * 18. CONS_CWRE – Chinaware and Ceramics
 * 19. CONS_DIPL – Diplomatic mail and goods
 * 20. CONS_EXHB – Exhibition goods
 * 21. CONS_FRNT – Furniture
 * 22. CONS_GLAS – Glassware
 * 23. CONS_HAID – Humanitarian aid
 * 24. CONS_HHGD – Household goods
 * 25. CONS_HRSE – Horse equipment
 * 26. CONS_HSER – House removal
 * 27. CONS_OFSP – Office supplies
 * 28. CONS_PERS – Personal effects
 * 29. CONS_SPEC – Spectacles
 * 30. CONS_SPRT – Sports equipment
 * 31. CONS_TOYS – Toys and Games
 * 32. CONS_UBAG – Unaccompagnied baggage
 * 33. ELEC – Electronic equipment
 * 34. ELEC_AVEQ – Audio-Video-HiFi equipment
 * 35. ELEC_CALC – Calculators
 * 36. ELEC_CMPT – Computers
 * 37. ELEC_CPRT – Computer parts
 * 38. ELEC_ECOM – Electronic components
 * 39. ELEC_EEQP – Electronic equipment
 * 40. ELEC_EGDS – Electronic goods
 * 41. ELEC_ELQP – Electrical equipment
 * 42. ELEC_OFEQ – Office equipment
 * 43. ELEC_QUAN – Quantum
 * 44. ELEC_TELC – Telecom equipment
 * 45. FLWR – Plants, Flowers, Seeds
 * 46. FLWR_FLWR – Fresh flowers
 * 47. FLWR_FLWR_CFLW – Cut flowers
 * 48. FLWR_FLWR_TFLW – Tropical flowers
 * 49. FLWR_FLWR_TULP – Fresh tulips
 * 50. FLWR_FMNT – Fresh mint
 * 51. FLWR_HERBS – Herbs, Leaves and Foliage
 * 52. FLWR_PLNT – Plants
 * 53. FLWR_PLNT_APLN – Aquatic plants
 * 54. FLWR_PLNT_BULB – Bulbs and Tubers
 * 55. FLWR_PLNT_MPLN – Medicinal plants
 * 56. FLWR_PLNT_TPLN – Tropical plants
 * 57. FLWR_SEED – Seeds
 * 58. FOOD – Foodstuffs, Drinks and Tobacco
 * 59. FOOD_BVRG – Beverages
 * 60. FOOD_BVRG_BEER – Beer
 * 61. FOOD_BVRG_COFY – Coffee
 * 62. FOOD_BVRG_TEA – Tea
 * 63. FOOD_BVRG_WINE – Wine
 * 64. FOOD_CERE – Cereal foods
 * 65. FOOD_CERE_BRED – Bread
 * 66. FOOD_CERE_CAKE – Cakes and Pastries
 * 67. FOOD_DARY – Dairy products
 * 68. FOOD_DARY_CHSE – Cheese
 * 69. FOOD_DARY_EGGS – Eggs
 * 70. FOOD_DARY_ICEC – Ice cream
 * 71. FOOD_FISH – Fish and Seafood
 * 72. FOOD_FISH_ALBA – Albacora
 * 73. FOOD_FISH_CAVR – Caviar
 * 74. FOOD_FISH_FFSH – Fresh fish
 * 75. FOOD_FISH_FRZF – Frozen fish
 * 76. FOOD_FISH_FRZS – Frozen seafood
 * 77. FOOD_FISH_HAKE – Hake
 * 78. FOOD_FISH_LOBS – Lobsters and Crabs
 * 79. FOOD_FISH_REPA – Reineta and Palometa
 * 80. FOOD_FISH_SFIN – Shark fin
 * 81. FOOD_FISH_SFSH – Smoked fish
 * 82. FOOD_FISH_SHRI – Shrimps and Prawns
 * 83. FOOD_FISH_SLMN – Salmon
 * 84. FOOD_FISH_TUNA – Tuna
 * 85. FOOD_FRTV – Fruits and Vegetables
 * 86. FOOD_FRTV_APPL – Apples
 * 87. FOOD_FRTV_ASPA – Asparagus
 * 88. FOOD_FRTV_AVOC – Avocados
 * 89. FOOD_FRTV_BANA – Bananas
 * 90. FOOD_FRTV_BEAN – String beans
 * 91. FOOD_FRTV_BERR – Berries
 * 92. FOOD_FRTV_CHER – Cherries
 * 93. FOOD_FRTV_CMBR – Cucumber
 * 94. FOOD_FRTV_DURI – Durian
 * 95. FOOD_FRTV_GARL – Garlic
 * 96. FOOD_FRTV_GRAP – Grapes
 * 97. FOOD_FRTV_LITC – Litchies
 * 98. FOOD_FRTV_MANG – Mangoes
 * 99. FOOD_FRTV_MLNS – Melons
 * 100. FOOD_FRTV_MUSH – Mushrooms
 * 101. FOOD_FRTV_PEPP – Peppers
 * 102. FOOD_FRTV_PINE – Pineapple
 * 103. FOOD_FRTV_PPYA – Papaya
 * 104. FOOD_FRTV_PROD – Produce
 * 105. FOOD_FRTV_STRW – Strawberries
 * 106. FOOD_FRTV_TOMA – Tomatoes
 * 107. FOOD_MEAT – Meat products
 * 108. FOOD_MEAT_BEEF – Beef products
 * 109. FOOD_MEAT_DRIM – Dried meat
 * 110. FOOD_MEAT_FRZM – Frozen meat
 * 111. FOOD_MEAT_GOSL – Goose liver
 * 112. FOOD_MEAT_GUTS – Guts
 * 113. FOOD_MEAT_HRSP – Horse products
 * 114. FOOD_MEAT_MEAT – Meat
 * 115. FOOD_MEAT_PORK – Pork products
 * 116. FOOD_MEAT_SAUS – Sausages
 * 117. FOOD_PERI – Perhishables
 * 118. FOOD_STUF – Foodstuffs
 * 119. FOOD_STUF_CATE – Catering products
 * 120. FOOD_STUF_CHOC – Chocolate
 * 121. FOOD_STUF_DFRU – Dried fruit
 * 122. FOOD_STUF_MPWD – Milk powder
 * 123. FOOD_STUF_NUTS – Nuts
 * 124. FOOD_STUF_OOIL – Olive oil
 * 125. FOOD_STUF_SPCE – Spices and Roots
 * 126. FOOD_TBCO – Tobacco products
 * 127. FOOD_TBCO_CGRT – Cigarettes
 * 128. FOOD_TBCO_CIGA – Cigars
 * 129. GENE – General Cargo
 * 130. HUMR – Human Remains
 * 131. HUMR_HUMB – Human remains not cremated
 * 132. HUMR_HUMC – Human remains cremated
 * 133. LIVE – Live Animals
 * 134. LIVE_BRDH – Birds & Hatching Eggs
 * 135. LIVE_BRDH_BIRD – Birds
 * 136. LIVE_BRDH_CHIC – Chicks
 * 137. LIVE_BRDH_DUCK – Ducks
 * 138. LIVE_BRDH_HEGG – Hatching Eggs
 * 139. LIVE_BRDH_OSTR – Ostriches
 * 140. LIVE_BRDH_PARR – Parrots
 * 141. LIVE_BRDH_TRKY – Turkeys
 * 142. LIVE_INSC – Insects
 * 143. LIVE_INSC_BEES – Bees
 * 144. LIVE_LFSH – Fish
 * 145. LIVE_LFSH_EELS – Eels
 * 146. LIVE_LFSH_KOIF – Koi fish
 * 147. LIVE_LFSH_TRPF – Tropical fish
 * 148. LIVE_MLKS – Mollusks
 * 149. LIVE_MLKS_LUGW – Lugworms
 * 150. LIVE_MLKS_SNAI – Snails
 * 151. LIVE_MMLS – Mammals
 * 152. LIVE_MMLS_CATL – Cattle
 * 153. LIVE_MMLS_CATS – Cats
 * 154. LIVE_MMLS_CATS_Abyssinian – Abyssinian
 * 155. LIVE_MMLS_CATS_American_Bobtail – American Bobtail
 * 156. LIVE_MMLS_CATS_American_Curl – American Curl
 * 157. LIVE_MMLS_CATS_American_Keuda – American Keuda
 * 158. LIVE_MMLS_CATS_American_Lynx – American Lynx
 * 159. LIVE_MMLS_CATS_American_Polydactyl – American Polydactyl
 * 160. LIVE_MMLS_CATS_American_Shorthair – American Shorthair
 * 161. LIVE_MMLS_CATS_American_Wirehair – American Wirehair
 * 162. LIVE_MMLS_CATS_Asian – Asian
 * 163. LIVE_MMLS_CATS_Australian_Mist – Australian Mist
 * 164. LIVE_MMLS_CATS_Balinese – Balinese
 * 165. LIVE_MMLS_CATS_Bengal – Bengal
 * 166. LIVE_MMLS_CATS_Birman – Birman
 * 167. LIVE_MMLS_CATS_Bombay – Bombay
 * 168. LIVE_MMLS_CATS_Bristol – Bristol
 * 169. LIVE_MMLS_CATS_British_Shorthair – British Shorthair
 * 170. LIVE_MMLS_CATS_Burmese – Burmese
 * 171. LIVE_MMLS_CATS_California_Spangled – California Spangled
 * 172. LIVE_MMLS_CATS_Chartreux – Chartreux
 * 173. LIVE_MMLS_CATS_Chausie – Chausie
 * 174. LIVE_MMLS_CATS_Chinese_Harlequin – Chinese Harlequin
 * 175. LIVE_MMLS_CATS_Color_Point_Shorthair – Color Point Shorthair
 * 176. LIVE_MMLS_CATS_Copper – Copper
 * 177. LIVE_MMLS_CATS_Cornish_Rex – Cornish Rex
 * 178. LIVE_MMLS_CATS_Cymric – Cymric
 * 179. LIVE_MMLS_CATS_Desert_Lynx – Desert Lynx
 * 180. LIVE_MMLS_CATS_Devon_Rex – Devon Rex
 * 181. LIVE_MMLS_CATS_Donskoy – Donskoy
 * 182. LIVE_MMLS_CATS_Egyptian_Mau – Egyptian Mau
 * 183. LIVE_MMLS_CATS_Exotic_Shorthair – Exotic Shorthair
 * 184. LIVE_MMLS_CATS_Havana – Havana
 * 185. LIVE_MMLS_CATS_Highland_Lynx – Highland Lynx
 * 186. LIVE_MMLS_CATS_Himalayan – Himalayan
 * 187. LIVE_MMLS_CATS_Japanese_Bobtail – Japanese Bobtail
 * 188. LIVE_MMLS_CATS_Javanese – Javanese
 * 189. LIVE_MMLS_CATS_Korat – Korat
 * 190. LIVE_MMLS_CATS_LaPerm – LaPerm
 * 191. LIVE_MMLS_CATS_Maine_Coon – Maine Coon
 * 192. LIVE_MMLS_CATS_Manx – Manx
 * 193. LIVE_MMLS_CATS_Mojave_Spotted – Mojave Spotted
 * 194. LIVE_MMLS_CATS_Munchkin – Munchkin
 * 195. LIVE_MMLS_CATS_Niebelung – Niebelung
 * 196. LIVE_MMLS_CATS_Norwegian_Forest – Norwegian Forest
 * 197. LIVE_MMLS_CATS_Ocicat – Ocicat
 * 198. LIVE_MMLS_CATS_Ojos_Azules – Ojos Azules
 * 199. LIVE_MMLS_CATS_Oriental – Oriental
 * 200. LIVE_MMLS_CATS_Pantherette – Pantherette
 * 201. LIVE_MMLS_CATS_Persian – Persian
 * 202. LIVE_MMLS_CATS_Peterbald – Peterbald
 * 203. LIVE_MMLS_CATS_Pixiebob – Pixiebob
 * 204. LIVE_MMLS_CATS_Ragamuffin – Ragamuffin
 * 205. LIVE_MMLS_CATS_Ragdoll – Ragdoll
 * 206. LIVE_MMLS_CATS_Russian_Blue – Russian Blue
 * 207. LIVE_MMLS_CATS_Safari – Safari
 * 208. LIVE_MMLS_CATS_Savannah – Savannah
 * 209. LIVE_MMLS_CATS_Scottish_Fold – Scottish Fold
 * 210. LIVE_MMLS_CATS_Selkirk_Rex – Selkirk Rex
 * 211. LIVE_MMLS_CATS_Serengeti – Serengeti
 * 212. LIVE_MMLS_CATS_Siamese – Siamese
 * 213. LIVE_MMLS_CATS_Siberian – Siberian
 * 214. LIVE_MMLS_CATS_Singapura – Singapura
 * 215. LIVE_MMLS_CATS_Snowshoe – Snowshoe
 * 216. LIVE_MMLS_CATS_Somali – Somali
 * 217. LIVE_MMLS_CATS_Sphynx – Sphynx
 * 218. LIVE_MMLS_CATS_Tiffany – Tiffany
 * 219. LIVE_MMLS_CATS_Tonkinese – Tonkinese
 * 220. LIVE_MMLS_CATS_Traditional_Siamese – Traditional Siamese
 * 221. LIVE_MMLS_CATS_Turkish_Angora – Turkish Angora
 * 222. LIVE_MMLS_CATS_Turkish_Van – Turkish Van
 * 223. LIVE_MMLS_CATS_Vienna_Woods – Vienna Woods
 * 224. LIVE_MMLS_CATS_Viverral_Hybrid_Cat – Viverral-Hybrid Cat
 * 225. LIVE_MMLS_CATS_York_Chocolate – York Chocolate
 * 226. LIVE_MMLS_DOGS – Dogs
 * 227. LIVE_MMLS_DOGS_Affenpinscher – Affenpinscher
 * 228. LIVE_MMLS_DOGS_Afghan_Hound – Afghan Hound
 * 229. LIVE_MMLS_DOGS_Airedale_Terrier – Airedale Terrier
 * 230. LIVE_MMLS_DOGS_Akita – Akita
 * 231. LIVE_MMLS_DOGS_Alangu_Mastiff – Alangu Mastiff
 * 232. LIVE_MMLS_DOGS_Alano – Alano
 * 233. LIVE_MMLS_DOGS_Alaskan_Malamute – Alaskan Malamute
 * 234. LIVE_MMLS_DOGS_American_Bulldog – American Bulldog
 * 235. LIVE_MMLS_DOGS_American_Bully – American Bully
 * 236. LIVE_MMLS_DOGS_American_Cocker_Spaniel – American Cocker Spaniel
 * 237. LIVE_MMLS_DOGS_American_English_Coonhound – American English Coonhound
 * 238. LIVE_MMLS_DOGS_American_Eskimo_Dog_Miniature – American Eskimo Dog-Miniature
 * 239. LIVE_MMLS_DOGS_American_Eskimo_Dog_Standard – American Eskimo Dog-Standard
 * 240. LIVE_MMLS_DOGS_American_Eskimo_Dog_Toy – American Eskimo Dog-Toy
 * 241. LIVE_MMLS_DOGS_American_Foxhound – American Foxhound
 * 242. LIVE_MMLS_DOGS_American_Hairless_Terrier – American Hairless Terrier
 * 243. LIVE_MMLS_DOGS_American_Pit_Bull_Terrier – American Pit Bull Terrier
 * 244. LIVE_MMLS_DOGS_American_Staffordshire_Terrier – American Staffordshire Terrier
 * 245. LIVE_MMLS_DOGS_American_Water_Spaniel – American Water Spaniel
 * 246. LIVE_MMLS_DOGS_Anatolian_Shepherd_Dog – Anatolian Shepherd Dog
 * 247. LIVE_MMLS_DOGS_Argentinian_Mastiff – Argentinian Mastiff
 * 248. LIVE_MMLS_DOGS_Aussiedoodle – Aussiedoodle
 * 249. LIVE_MMLS_DOGS_Australian_Cattle_Dog – Australian Cattle Dog
 * 250. LIVE_MMLS_DOGS_Australian_Shepherd – Australian Shepherd
 * 251. LIVE_MMLS_DOGS_Australian_Terrier – Australian Terrier
 * 252. LIVE_MMLS_DOGS_Ba_Shar_Basset_Hound_Shar_pei_Mix – Ba Shar-Basset Hound Shar pei Mix
 * 253. LIVE_MMLS_DOGS_Basenji – Basenji
 * 254. LIVE_MMLS_DOGS_Basset_Hound – Basset Hound
 * 255. LIVE_MMLS_DOGS_Beagle – Beagle
 * 256. LIVE_MMLS_DOGS_Bearded_Collie – Bearded Collie
 * 257. LIVE_MMLS_DOGS_Beauceron – Beauceron
 * 258. LIVE_MMLS_DOGS_Bedlington_Terrier – Bedlington Terrier
 * 259. LIVE_MMLS_DOGS_Belgian_Malinois – Belgian Malinois
 * 260. LIVE_MMLS_DOGS_Belgian_Sheepdog – Belgian Sheepdog
 * 261. LIVE_MMLS_DOGS_Belgian_Tervuren – Belgian Tervuren
 * 262. LIVE_MMLS_DOGS_Bergamasco – Bergamasco
 * 263. LIVE_MMLS_DOGS_Berger_Picard – Berger Picard
 * 264. LIVE_MMLS_DOGS_Bernedoodle – Bernedoodle
 * 265. LIVE_MMLS_DOGS_Bernese_Mountain_Dog – Bernese Mountain Dog
 * 266. LIVE_MMLS_DOGS_Bichon_Frise – Bichon Frise
 * 267. LIVE_MMLS_DOGS_Black_Russian_Terrier – Black Russian Terrier
 * 268. LIVE_MMLS_DOGS_Black_and_Tan_Coonhound – Black and Tan Coonhound
 * 269. LIVE_MMLS_DOGS_Bloodhound – Bloodhound
 * 270. LIVE_MMLS_DOGS_Bluetick_Coonhound – Bluetick Coonhound
 * 271. LIVE_MMLS_DOGS_Boerboel – Boerboel
 * 272. LIVE_MMLS_DOGS_Border_Collie – Border Collie
 * 273. LIVE_MMLS_DOGS_Border_Terrier – Border Terrier
 * 274. LIVE_MMLS_DOGS_Borzoi – Borzoi
 * 275. LIVE_MMLS_DOGS_Boston_Terrier – Boston Terrier
 * 276. LIVE_MMLS_DOGS_Bouvier_des_Flandres – Bouvier des Flandres
 * 277. LIVE_MMLS_DOGS_Boweimar_Boxer_Weimaraner_Mix – Boweimar-Boxer Weimaraner Mix
 * 278. LIVE_MMLS_DOGS_Boxer – Boxer
 * 279. LIVE_MMLS_DOGS_Boykin_Spaniel – Boykin Spaniel
 * 280. LIVE_MMLS_DOGS_Brazilian_Mastiff – Brazilian Mastiff
 * 281. LIVE_MMLS_DOGS_Briard – Briard
 * 282. LIVE_MMLS_DOGS_Brittany – Brittany
 * 283. LIVE_MMLS_DOGS_Brussels_Griffon – Brussels Griffon
 * 284. LIVE_MMLS_DOGS_Bull_Terrier – Bull Terrier
 * 285. LIVE_MMLS_DOGS_Bull_Terrier_Miniature – Bull Terrier-Miniature
 * 286. LIVE_MMLS_DOGS_Bulldog – Bulldog
 * 287. LIVE_MMLS_DOGS_Bulli_Kutta – Bulli Kutta
 * 288. LIVE_MMLS_DOGS_Bullmastiff – Bullmastiff
 * 289. LIVE_MMLS_DOGS_Bully_Kutta_Mastiff_breed – Bully Kutta-Mastiff breed
 * 290. LIVE_MMLS_DOGS_Cairn_Terrier – Cairn Terrier
 * 291. LIVE_MMLS_DOGS_Campeiro_Bulldog_Brazilian_Bulldog – Campeiro Bulldog-Brazilian Bulldog
 * 292. LIVE_MMLS_DOGS_Canaan_Dog – Canaan Dog
 * 293. LIVE_MMLS_DOGS_Canary_Mastiff – Canary Mastiff
 * 294. LIVE_MMLS_DOGS_Cane_Corso – Cane Corso
 * 295. LIVE_MMLS_DOGS_Cardigan_Welsh_Corgi – Cardigan Welsh Corgi
 * 296. LIVE_MMLS_DOGS_Catahoula_Bulldog_Catahoula_Leopard_Bulldog – Catahoula Bulldog-Catahoula Leopard Bulldog
 * 297. LIVE_MMLS_DOGS_Cavachon_King_Charles_Spaniel_Bichon_Frise – Cavachon-King Charles Spaniel Bichon Frise
 * 298. LIVE_MMLS_DOGS_Cavalier_King_Charles_Spaniel – Cavalier King Charles Spaniel
 * 299. LIVE_MMLS_DOGS_Cavapoo_Cavalier_King_Charles_Spaniel_Poodle – Cavapoo-Cavalier King Charles Spaniel Poodle
 * 300. LIVE_MMLS_DOGS_Cesky_Terrier – Cesky Terrier
 * 301. LIVE_MMLS_DOGS_Chesapeake_Bay_Retriever – Chesapeake Bay Retriever
 * 302. LIVE_MMLS_DOGS_Chihuahua – Chihuahua
 * 303. LIVE_MMLS_DOGS_Chinese_Crested_Dog – Chinese Crested Dog
 * 304. LIVE_MMLS_DOGS_Chinese_Pug – Chinese Pug
 * 305. LIVE_MMLS_DOGS_Chinese_Shar_Pei – Chinese Shar Pei
 * 306. LIVE_MMLS_DOGS_Chinook – Chinook
 * 307. LIVE_MMLS_DOGS_Chipin_Chihuahua_Minature_Pinscher_Mix – Chipin-Chihuahua Minature Pinscher Mix
 * 308. LIVE_MMLS_DOGS_Chiweenie_Chihuahua_Dachshund_Mix – Chiweenie-Chihuahua Dachshund Mix
 * 309. LIVE_MMLS_DOGS_Chorkie_Chihuahua_Yorkshire_Terrier_Mix – Chorkie-Chihuahua Yorkshire Terrier Mix
 * 310. LIVE_MMLS_DOGS_Chow_Chow – Chow Chow
 * 311. LIVE_MMLS_DOGS_Chow_Pei_Chow_Chow_Shar_Pei_Mix – Chow Pei-Chow Chow Shar Pei Mix
 * 312. LIVE_MMLS_DOGS_Cirneco_dell_Etna – Cirneco dell Etna
 * 313. LIVE_MMLS_DOGS_Clumber_Spaniel – Clumber Spaniel
 * 314. LIVE_MMLS_DOGS_Cockapoo_Cocker_Spaniel_Poodle_Mix – Cockapoo-Cocker Spaniel Poodle Mix
 * 315. LIVE_MMLS_DOGS_Cocker_Spaniel – Cocker Spaniel
 * 316. LIVE_MMLS_DOGS_Collie – Collie
 * 317. LIVE_MMLS_DOGS_Coton_de_Tulear – Coton de Tulear
 * 318. LIVE_MMLS_DOGS_Curly_Coated_Retriever – Curly-Coated Retriever
 * 319. LIVE_MMLS_DOGS_Dachshund – Dachshund
 * 320. LIVE_MMLS_DOGS_Dalmatian – Dalmatian
 * 321. LIVE_MMLS_DOGS_Dandie_Dinmont_Terrier – Dandie Dinmont Terrier
 * 322. LIVE_MMLS_DOGS_Doberman_Pinscher – Doberman Pinscher
 * 323. LIVE_MMLS_DOGS_Dogo_Argentino – Dogo Argentino
 * 324. LIVE_MMLS_DOGS_Dogue_de_Bordeaux – Dogue de Bordeaux
 * 325. LIVE_MMLS_DOGS_Doxiepoo_Dachshund_Poodle_Mix – Doxiepoo-Dachshund Poodle Mix
 * 326. LIVE_MMLS_DOGS_Dutch_Pug – Dutch Pug
 * 327. LIVE_MMLS_DOGS_English_Bulldog – English Bulldog
 * 328. LIVE_MMLS_DOGS_English_Cocker_Spaniel – English Cocker Spaniel
 * 329. LIVE_MMLS_DOGS_English_Foxhound – English Foxhound
 * 330. LIVE_MMLS_DOGS_English_Mastiff – English Mastiff
 * 331. LIVE_MMLS_DOGS_English_Setter – English Setter
 * 332. LIVE_MMLS_DOGS_English_Springer_Spaniel – English Springer Spaniel
 * 333. LIVE_MMLS_DOGS_English_Toy_Spaniel – English Toy Spaniel
 * 334. LIVE_MMLS_DOGS_Entlebucher_Mountain_Dog – Entlebucher Mountain Dog
 * 335. LIVE_MMLS_DOGS_Eurasier – Eurasier
 * 336. LIVE_MMLS_DOGS_Field_Spaniel – Field Spaniel
 * 337. LIVE_MMLS_DOGS_Fila_Brasileiro_Brazilian_Mastiff – Fila Brasileiro-Brazilian Mastiff
 * 338. LIVE_MMLS_DOGS_Finnish_Lapphund – Finnish Lapphund
 * 339. LIVE_MMLS_DOGS_Finnish_Spitz – Finnish Spitz
 * 340. LIVE_MMLS_DOGS_Flat_Coated_Retriever – Flat-Coated Retriever
 * 341. LIVE_MMLS_DOGS_French_Bulldog – French Bulldog
 * 342. LIVE_MMLS_DOGS_French_Mastiff – French Mastiff
 * 343. LIVE_MMLS_DOGS_German_Mastiff_Great_Dane – German Mastiff-Great Dane
 * 344. LIVE_MMLS_DOGS_German_Pinscher – German Pinscher
 * 345. LIVE_MMLS_DOGS_German_Shepherd_Dog – German Shepherd Dog
 * 346. LIVE_MMLS_DOGS_German_Shorthaired_Pointer – German Shorthaired Pointer
 * 347. LIVE_MMLS_DOGS_German_Wirehaired_Pointer – German Wirehaired Pointer
 * 348. LIVE_MMLS_DOGS_Giant_Schnauzer – Giant Schnauzer
 * 349. LIVE_MMLS_DOGS_Glen_of_Imaal_Terrier – Glen of Imaal Terrier
 * 350. LIVE_MMLS_DOGS_Goldador_Golden_Retriever_Labrador_Retriever – Goldador-Golden Retriever Labrador Retriever
 * 351. LIVE_MMLS_DOGS_Golden_Retriever – Golden Retriever
 * 352. LIVE_MMLS_DOGS_Goldendoodle_Golden_Retriever_Poodle_Mix – Goldendoodle-Golden Retriever Poodle Mix
 * 353. LIVE_MMLS_DOGS_Gordon_Setter – Gordon Setter
 * 354. LIVE_MMLS_DOGS_Great_Dane – Great Dane
 * 355. LIVE_MMLS_DOGS_Great_Pyrenees – Great Pyrenees
 * 356. LIVE_MMLS_DOGS_Greater_Swiss_Mountain_Dog – Greater Swiss Mountain Dog
 * 357. LIVE_MMLS_DOGS_Greyhound – Greyhound
 * 358. LIVE_MMLS_DOGS_Harrier – Harrier
 * 359. LIVE_MMLS_DOGS_Havanese – Havanese
 * 360. LIVE_MMLS_DOGS_Ibizan_Hound – Ibizan Hound
 * 361. LIVE_MMLS_DOGS_Icelandic_Sheepdog – Icelandic Sheepdog
 * 362. LIVE_MMLS_DOGS_Irish_Red_and_White_Setter – Irish Red and White Setter
 * 363. LIVE_MMLS_DOGS_Irish_Setter – Irish Setter
 * 364. LIVE_MMLS_DOGS_Irish_Terrier – Irish Terrier
 * 365. LIVE_MMLS_DOGS_Irish_Water_Spaniel – Irish Water Spaniel
 * 366. LIVE_MMLS_DOGS_Irish_Wolfhound – Irish Wolfhound
 * 367. LIVE_MMLS_DOGS_Italian_Greyhound – Italian Greyhound
 * 368. LIVE_MMLS_DOGS_Italian_Mastiff – Italian Mastiff
 * 369. LIVE_MMLS_DOGS_Jack_Chi_Chihuahua_Jack_Russell_Terrier_Mix – Jack Chi-Chihuahua Jack Russell Terrier Mix
 * 370. LIVE_MMLS_DOGS_Jack_Russell_Terrier – Jack Russell Terrier
 * 371. LIVE_MMLS_DOGS_Japanese_Boxer – Japanese Boxer
 * 372. LIVE_MMLS_DOGS_Japanese_Chin – Japanese Chin
 * 373. LIVE_MMLS_DOGS_Japanese_Mastiff – Japanese Mastiff
 * 374. LIVE_MMLS_DOGS_Japanese_Pug – Japanese Pug
 * 375. LIVE_MMLS_DOGS_Japanese_Spaniel – Japanese Spaniel
 * 376. LIVE_MMLS_DOGS_Kangal_Shepherd_Dog – Kangal Shepherd Dog
 * 377. LIVE_MMLS_DOGS_Keeshond – Keeshond
 * 378. LIVE_MMLS_DOGS_Kerry_Blue_Terrier – Kerry Blue Terrier
 * 379. LIVE_MMLS_DOGS_King_Charles_Spaniel – King Charles Spaniel
 * 380. LIVE_MMLS_DOGS_Komondor – Komondor
 * 381. LIVE_MMLS_DOGS_Kuvasz – Kuvasz
 * 382. LIVE_MMLS_DOGS_Kyi_Leo_Maltese_Lhasa_Apso_Mix – Kyi-Leo-Maltese Lhasa Apso Mix
 * 383. LIVE_MMLS_DOGS_Labrabull_Labrador_Retriever_American_Pit_Bull – Labrabull-Labrador Retriever American Pit Bull
 * 384. LIVE_MMLS_DOGS_Labradane_Labrador_Retriever_Great_Dane_Mix – Labradane-Labrador Retriever Great Dane Mix
 * 385. LIVE_MMLS_DOGS_Labradoodle_Labrador_Retriever_Poodle_Mix – Labradoodle Labrador Retriever Poodle Mix
 * 386. LIVE_MMLS_DOGS_Labrador_Retriever – Labrador Retriever
 * 387. LIVE_MMLS_DOGS_Lagotto_Romagnolo – Lagotto Romagnolo
 * 388. LIVE_MMLS_DOGS_Lakeland_Terrier – Lakeland Terrier
 * 389. LIVE_MMLS_DOGS_Leonberger – Leonberger
 * 390. LIVE_MMLS_DOGS_Lhasa_Apso – Lhasa Apso
 * 391. LIVE_MMLS_DOGS_Löwchen – Löwchen
 * 392. LIVE_MMLS_DOGS_Mal_Shi_Maltese_Shih_Tzu_Mix – Mal-Shi-Maltese Shih Tzu Mix
 * 393. LIVE_MMLS_DOGS_Malt_Tzu_Maltese_Shih_Tzu_Mix – Malt-Tzu-Maltese Shih Tzu Mix
 * 394. LIVE_MMLS_DOGS_Maltese – Maltese
 * 395. LIVE_MMLS_DOGS_Maltese_Shih_Tzu – Maltese Shih Tzu
 * 396. LIVE_MMLS_DOGS_Malti_Zu_Maltese_Shih_Tzu_Mix – Malti Zu-Maltese Shih Tzu Mix
 * 397. LIVE_MMLS_DOGS_Maltipoo_Maltese_Poodle_Mix – Maltipoo-Maltese Poodle Mix
 * 398. LIVE_MMLS_DOGS_Manchester_Terrier – Manchester Terrier
 * 399. LIVE_MMLS_DOGS_Mastador_Bullmastiff_Labrador_Retriever_Mix – Mastador-Bullmastiff Labrador Retriever Mix
 * 400. LIVE_MMLS_DOGS_Mastiff – Mastiff
 * 401. LIVE_MMLS_DOGS_Mastin_Espanol_Spanish_Mastiff – Mastin Espanol-Spanish Mastiff
 * 402. LIVE_MMLS_DOGS_Mastino_Napoletano_Neopolitan_Mastiff – Mastino Napoletano-Neopolitan Mastiff
 * 403. LIVE_MMLS_DOGS_Miniature_American_Shepherd – Miniature American Shepherd
 * 404. LIVE_MMLS_DOGS_Miniature_Bull_Terrier – Miniature Bull Terrier
 * 405. LIVE_MMLS_DOGS_Miniature_Pinscher – Miniature Pinscher
 * 406. LIVE_MMLS_DOGS_Miniature_Schnauzer – Miniature Schnauzer
 * 407. LIVE_MMLS_DOGS_Mixed_Invalid_Breed_Type – Mixed-Invalid Breed Type
 * 408. LIVE_MMLS_DOGS_Neapolitan_Mastiff – Neapolitan Mastiff
 * 409. LIVE_MMLS_DOGS_Newfoundland – Newfoundland
 * 410. LIVE_MMLS_DOGS_Norfolk_Terrier – Norfolk Terrier
 * 411. LIVE_MMLS_DOGS_Norwegian_Buhund – Norwegian Buhund
 * 412. LIVE_MMLS_DOGS_Norwegian_Elkhound – Norwegian Elkhound
 * 413. LIVE_MMLS_DOGS_Norwegian_Lundehund – Norwegian Lundehund
 * 414. LIVE_MMLS_DOGS_Norwich_Terrier – Norwich Terrier
 * 415. LIVE_MMLS_DOGS_Nova_Scotia_Duck_Tolling_Retriever – Nova Scotia Duck-Tolling Retriever
 * 416. LIVE_MMLS_DOGS_Old_English_Bulldog – Old English Bulldog
 * 417. LIVE_MMLS_DOGS_Old_English_Sheepdog – Old English Sheepdog
 * 418. LIVE_MMLS_DOGS_Olde_English_Bulldog – Olde English Bulldog
 * 419. LIVE_MMLS_DOGS_Otterhound – Otterhound
 * 420. LIVE_MMLS_DOGS_Papillon – Papillon
 * 421. LIVE_MMLS_DOGS_Parson_Russell_Terrier – Parson Russell Terrier
 * 422. LIVE_MMLS_DOGS_Peekapoo_Pekingese_Poodle_Mix – Peekapoo-Pekingese Poodle Mix
 * 423. LIVE_MMLS_DOGS_Pekingese – Pekingese
 * 424. LIVE_MMLS_DOGS_Pembroke_Welsh_Corgi – Pembroke Welsh Corgi
 * 425. LIVE_MMLS_DOGS_Petit_Basset_Griffon_Vendéen – Petit Basset Griffon Vendéen
 * 426. LIVE_MMLS_DOGS_Pharaoh_Hound – Pharaoh Hound
 * 427. LIVE_MMLS_DOGS_Pit_Bull – Pit Bull
 * 428. LIVE_MMLS_DOGS_Pit_Plott_Pitbull_Plott_Hound_Mix – Pit Plott-Pitbull Plott Hound Mix
 * 429. LIVE_MMLS_DOGS_Plott_Hound – Plott Hound
 * 430. LIVE_MMLS_DOGS_Pointer – Pointer
 * 431. LIVE_MMLS_DOGS_Polish_Lowland_Sheepdog – Polish Lowland Sheepdog
 * 432. LIVE_MMLS_DOGS_Pomapoo_Pomeranian_Poodle_Mix – Pomapoo-Pomeranian Poodle Mix
 * 433. LIVE_MMLS_DOGS_Pomchi_Pomeranian_Chihuahua_Mix – Pomchi-Pomeranian Chihuahua Mix
 * 434. LIVE_MMLS_DOGS_Pomeranian – Pomeranian
 * 435. LIVE_MMLS_DOGS_Pomsky_Pomeranian_Siberian_Husky_Mix – Pomsky-Pomeranian Siberian Husky Mix
 * 436. LIVE_MMLS_DOGS_Poochon_Poodle_Bichon_Frise_Mix – Poochon-Poodle Bichon Frise Mix
 * 437. LIVE_MMLS_DOGS_Poodle – Poodle
 * 438. LIVE_MMLS_DOGS_Portuguese_Podengo_Pequeno – Portuguese Podengo Pequeno
 * 439. LIVE_MMLS_DOGS_Portuguese_Water_Dog – Portuguese Water Dog
 * 440. LIVE_MMLS_DOGS_Presa_Canario – Presa Canario
 * 441. LIVE_MMLS_DOGS_Pug – Pug
 * 442. LIVE_MMLS_DOGS_Pugapoo_Pug_Poodle_Mix – Pugapoo-Pug Poodle Mix
 * 443. LIVE_MMLS_DOGS_Puggle_Pug_Beagle_Mix – Puggle-Pug Beagle Mix
 * 444. LIVE_MMLS_DOGS_Puli – Puli
 * 445. LIVE_MMLS_DOGS_Pyrenean_Mastiff – Pyrenean Mastiff
 * 446. LIVE_MMLS_DOGS_Pyrenean_Shepherd – Pyrenean Shepherd
 * 447. LIVE_MMLS_DOGS_Rat_Terrier – Rat Terrier
 * 448. LIVE_MMLS_DOGS_Redbone_Coonhound – Redbone Coonhound
 * 449. LIVE_MMLS_DOGS_Rhodesian_Ridgeback – Rhodesian Ridgeback
 * 450. LIVE_MMLS_DOGS_Rottweiler – Rottweiler
 * 451. LIVE_MMLS_DOGS_Russell_Terrier – Russell Terrier
 * 452. LIVE_MMLS_DOGS_Saint_Bernard – Saint Bernard
 * 453. LIVE_MMLS_DOGS_Saluki – Saluki
 * 454. LIVE_MMLS_DOGS_Samoyed – Samoyed
 * 455. LIVE_MMLS_DOGS_Schipperke – Schipperke
 * 456. LIVE_MMLS_DOGS_Schnoodle_Schnauzer_Poodle_Mix – Schnoodle-Schnauzer Poodle Mix
 * 457. LIVE_MMLS_DOGS_Scottish_Deerhound – Scottish Deerhound
 * 458. LIVE_MMLS_DOGS_Scottish_Terrier – Scottish Terrier
 * 459. LIVE_MMLS_DOGS_Sealyham_Terrier – Sealyham Terrier
 * 460. LIVE_MMLS_DOGS_Shar_Pei – Shar Pei
 * 461. LIVE_MMLS_DOGS_Sheepadoodle_Old_English_Sheepdog_Poodle_Mix – Sheepadoodle-Old English Sheepdog Poodle Mix
 * 462. LIVE_MMLS_DOGS_Shetland_Sheepdog – Shetland Sheepdog
 * 463. LIVE_MMLS_DOGS_Shiba_Inu – Shiba Inu
 * 464. LIVE_MMLS_DOGS_Shih_Poo – Shih-Poo
 * 465. LIVE_MMLS_DOGS_Shih_Tzu – Shih Tzu
 * 466. LIVE_MMLS_DOGS_Shihpoo_Shih_Tzu_Poodle_Mix – Shihpoo-Shih Tzu Poodle Mix
 * 467. LIVE_MMLS_DOGS_Siberian_Husky – Siberian Husky
 * 468. LIVE_MMLS_DOGS_Silky_Terrier – Silky Terrier
 * 469. LIVE_MMLS_DOGS_Skye_Terrier – Skye Terrier
 * 470. LIVE_MMLS_DOGS_Sloughi_Arabian_Greyhound – Sloughi-Arabian Greyhound
 * 471. LIVE_MMLS_DOGS_Smooth_Fox_Terrier – Smooth Fox Terrier
 * 472. LIVE_MMLS_DOGS_Soft_Coated_Wheaten_Terrier – Soft-Coated Wheaten Terrier
 * 473. LIVE_MMLS_DOGS_South_African_Mastiff – South African Mastiff
 * 474. LIVE_MMLS_DOGS_Spanish_Mastiff – Spanish Mastiff
 * 475. LIVE_MMLS_DOGS_Spanish_Water_Dog – Spanish Water Dog
 * 476. LIVE_MMLS_DOGS_Spinone_Italiano – Spinone Italiano
 * 477. LIVE_MMLS_DOGS_Staffordshire_Bull_Terrier – Staffordshire Bull Terrier
 * 478. LIVE_MMLS_DOGS_Standard_Schnauzer – Standard Schnauzer
 * 479. LIVE_MMLS_DOGS_Sussex_Spaniel – Sussex Spaniel
 * 480. LIVE_MMLS_DOGS_Swedish_Vallhund – Swedish Vallhund
 * 481. LIVE_MMLS_DOGS_Tibetan_Mastiff – Tibetan Mastiff
 * 482. LIVE_MMLS_DOGS_Tibetan_Spaniel – Tibetan Spaniel
 * 483. LIVE_MMLS_DOGS_Tibetan_Terrier – Tibetan Terrier
 * 484. LIVE_MMLS_DOGS_Tosa_Japanese_Mastiff – Tosa-Japanese Mastiff
 * 485. LIVE_MMLS_DOGS_Toy_Fox_Terrier – Toy Fox Terrier
 * 486. LIVE_MMLS_DOGS_Treeing_Walker_Coonhound – Treeing Walker Coonhound
 * 487. LIVE_MMLS_DOGS_Utonagan_Northern_Inuit_Dog – Utonagan-Northern Inuit Dog
 * 488. LIVE_MMLS_DOGS_Valley_Bulldog – Valley Bulldog
 * 489. LIVE_MMLS_DOGS_Vizsla – Vizsla
 * 490. LIVE_MMLS_DOGS_Weimaraner – Weimaraner
 * 491. LIVE_MMLS_DOGS_Welsh_Springer_Spaniel – Welsh Springer Spaniel
 * 492. LIVE_MMLS_DOGS_Welsh_Terrier – Welsh Terrier
 * 493. LIVE_MMLS_DOGS_West_Highland_White_Terrier – West Highland White Terrier
 * 494. LIVE_MMLS_DOGS_Whippet – Whippet
 * 495. LIVE_MMLS_DOGS_Wire_Fox_Terrier – Wire Fox Terrier
 * 496. LIVE_MMLS_DOGS_Wirehaired_Pointing_Griffon – Wirehaired Pointing Griffon
 * 497. LIVE_MMLS_DOGS_Wirehaired_Vizsla – Wirehaired Vizsla
 * 498. LIVE_MMLS_DOGS_Xoloitzcuintli_Mexican_Hairless_Dog – Xoloitzcuintli-Mexican Hairless Dog
 * 499. LIVE_MMLS_DOGS_Yorkipoo_Yorkshire_Terrier_Poodle_Mix – Yorkipoo-Yorkshire Terrier Poodle Mix
 * 500. LIVE_MMLS_DOGS_Yorkshire_Terrier – Yorkshire Terrier
 * 501. LIVE_MMLS_FERR – Ferrets
 * 502. LIVE_MMLS_GOAT – Goats
 * 503. LIVE_MMLS_HORS – Horses
 * 504. LIVE_MMLS_MNKY – Monkeys
 * 505. LIVE_MMLS_PIGS – Pigs
 * 506. LIVE_MMLS_RDNT – Rodents
 * 507. LIVE_MMLS_SHEP – Sheep
 * 508. LIVE_REPT – Reptiles
 * 509. LIVE_VANI – Venomous animals
 * 510. LIVE_ZOOA – Zoo animals
 * 511. MAIL – Mail
 * 512. MART – Musical Instruments & Art
 * 513. MART_ART – Art
 * 514. MART_ENGR – Engraving
 * 515. MART_HAND – Handicraft products
 * 516. MART_MUEQ – Musical equipment
 * 517. MART_MUSI – Musical instruments
 * 518. MART_PNTG – Painting
 * 519. MLTY – Military, Weapons and Ammunition
 * 520. MLTY_AMUN – Munitions
 * 521. MLTY_MSUP – Military supplies
 * 522. MLTY_SPWE – Sporting weapons
 * 523. MLTY_WPNS – Weapons
 * 524. PHAR – Pharmaceutical, Medical And Biological
 * 525. PHAR_BIOP – Biological products
 * 526. PHAR_BIOP_BIOC – Biochemicals
 * 527. PHAR_BIOP_HEMO – Hemoderivatives
 * 528. PHAR_BIOP_HUBL – Human blood
 * 529. PHAR_BIOP_HUSR – Human serum
 * 530. PHAR_BIOP_LHOR – Live human organs
 * 531. PHAR_BIOP_SEME – Semen
 * 532. PHAR_BIOP_SMPL – Samples
 * 533. PHAR_MDCN – Medicines
 * 534. PHAR_MDCN_ANTB – Antibiotics and Vitamins
 * 535. PHAR_MDCN_VACC – Vaccines
 * 536. PHAR_MDCN_VETE – Vetenary products
 * 537. PHAR_MEDI – Medical
 * 538. PHAR_PHAR – Pharmaceutical products
 * 539. PHAR_PHAR_SUEQ – Surgical equipment
 * 540. PRIN – Printed Matter
 * 541. PRIN_ADVM – Advertising materials
 * 542. PRIN_BOOK – Books
 * 543. PRIN_DOCU – Documents and Tickets
 * 544. PRIN_EDUM – Educational materials
 * 545. PRIN_NEWS – Newspapers and Magazines
 * 546. PRIN_PPRP – Paper products
 * 547. RAWM – Raw materials (Construction, Metals, Wood, Minerals, Plastic)
 * 548. RAWM_BLDM – Building material
 * 549. RAWM_CLAY – Clay products
 * 550. RAWM_GLAS – Glass products
 * 551. RAWM_GRAN – Granite slabs
 * 552. RAWM_GUMS – Gums-Resines
 * 553. RAWM_MARB – Marble
 * 554. RAWM_METL – Metals
 * 555. RAWM_METP – Metal products
 * 556. RAWM_MICA – Mica products
 * 557. RAWM_MINE – Minerals
 * 558. RAWM_MIRR – Mirre
 * 559. RAWM_OILS – Oils
 * 560. RAWM_PLST – Plastic products
 * 561. RAWM_QRTZ – Quartz
 * 562. RAWM_RUBR – Rubber products
 * 563. RAWM_RUBR_RTYR – Rubber tyres
 * 564. RAWM_STNS – Stones
 * 565. RAWM_WOOD – Wood products
 * 566. SCIN – Scientific Instruments
 * 567. SCIN_DEEQ – Densist equipment
 * 568. SCIN_DIAG – Diagnostics equipment
 * 569. SCIN_HEAR – Hearing aids
 * 570. SCIN_LBEQ – Laboratory equipment
 * 571. SCIN_MEEQ – Medical equipment
 * 572. SCIN_OPTI – Optical instruments
 * 573. SCIN_PRCI – Precision instruments
 * 574. TRPH – Trophies
 * 575. TRPH_HTRH – Hunting Trophies
 * 576. TRPH_OTRH – Trophies (not hunting)
 * 577. TXTL – Textiles, Leather and Furs
 * 578. TXTL_FREW – Furs excluding Wear
 * 579. TXTL_FUR – Fur
 * 580. TXTL_FURW – Furs wear
 * 581. TXTL_LEXW – Leather excluding Wear
 * 582. TXTL_LTHR – Leather
 * 583. TXTL_LTWR – Leather wear
 * 584. TXTL_TXEW – Textiles excluding Wear
 * 585. TXTL_TXEW_CARP – Carpets and Rugs
 * 586. TXTL_TXEW_CURT – Curtains and Drapery
 * 587. TXTL_TXEW_FABR – Textile fabric
 * 588. TXTL_TXEW_FURN – Textile furnish
 * 589. TXTL_TXEW_HIDE – Hide
 * 590. TXTL_TXEW_NDLE – Needlework
 * 591. TXTL_TXEW_SKIN – Skins
 * 592. TXTL_TXEW_TRLS – Textile rolls
 * 593. TXTL_TXEW_YARN – Yarns
 * 594. TXTL_TXLW – Textile wear
 * 595. TXTL_TXLW_APPR – Wearing appareil
 * 596. TXTL_TXLW_CLTH – Clothing
 * 597. TXTL_TXLW_FOOT – Footwear
 * 598. TXTL_TXLW_GARM – Garments
 * 599. TXTL_TXTL – Textiles
 * 600. VALU – Valuables
 * 601. VALU_BANK – Bank notes and Coins
 * 602. VALU_DIAM – Diamonds
 * 603. VALU_GOLD – Gold
 * 604. VALU_JWRY – Jewelery
 * 605. VALU_PLAT – Platinum
 * 606. VALU_PMET – Precious metal
 * 607. VALU_PSTN – Precious stones
 * 608. VALU_SLVR – Silver
 * 609. VALU_WTCH – Watches
 * 610. VHCL – Vehicle / Machinary, Parts, Spares
 * 611. VHCL_AIRC – Aircraft
 * 612. VHCL_AIRC_AACC – Aircraft accessories
 * 613. VHCL_AIRC_AENG – Aicraft engines
 * 614. VHCL_AIRC_AMTR – Aircraft motors
 * 615. VHCL_AIRC_APRT – Aircraft parts
 * 616. VHCL_AIRC_ASUP – Aircraft supplies
 * 617. VHCL_AIRC_AWHL – Aircraft wheels
 * 618. VHCL_AIRC_HELI – Helicopter
 * 619. VHCL_AIRC_HPRT – Helicopter parts
 * 620. VHCL_MACH – Machinery and Tools
 * 621. VHCL_MACH_COIL – Cable coil
 * 622. VHCL_MACH_COMP – Comperssors
 * 623. VHCL_MACH_HRDW – Hardware and Equipment
 * 624. VHCL_MACH_MECH – Mechanic products
 * 625. VHCL_MACH_MTSP – Machinery supplies and Parts
 * 626. VHCL_MACH_OILD – Oil drilling equipment
 * 627. VHCL_MACH_PART – Spare parts
 * 628. VHCL_MACH_PUEQ – Pumping equipment
 * 629. VHCL_SHIP – Ships
 * 630. VHCL_SHIP_SENG – Engines and Turbines
 * 631. VHCL_SHIP_SMTR – Motor and Generator
 * 632. VHCL_SHIP_SPAR – Ship parts
 * 633. VHCL_SHIP_SSPA – Ship spares
 * 634. VHCL_SVCL – Surface vehicles
 * 635. VHCL_SVCL_AUTO – Automobiles
 * 636. VHCL_SVCL_BICY – Bicycles
 * 637. VHCL_SVCL_CRTA – Cartainer
 * 638. VHCL_SVCL_MOTO – Motorcycles
 * 639. VHCL_SVCL_PART – Automobile parts
 * 640. VHCL_SVCL_TIRE – Tires
 *
 * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode Ontology
 */
#[Version('1.0.1')]
enum CommodityCode: string
{
    /**
     * Chemicals
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM Ontology
     */
    case CHEM = 'CHEM';

    /**
     * Chemicals - Dangerous
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_CDGR Ontology
     */
    case CHEM_CDGR = 'CHEM_CDGR';

    /**
     * Cleaning products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_CLNG Ontology
     */
    case CHEM_CLNG = 'CHEM_CLNG';

    /**
     * Chemicals - Not dangerous
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_CNDG Ontology
     */
    case CHEM_CNDG = 'CHEM_CNDG';

    /**
     * Chemicals - Not Medical
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_CNMD Ontology
     */
    case CHEM_CNMD = 'CHEM_CNMD';

    /**
     * Cosmetics
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_COSM Ontology
     */
    case CHEM_COSM = 'CHEM_COSM';

    /**
     * Cosmetics - DGR
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_COSM_COSD Ontology
     */
    case CHEM_COSM_COSD = 'CHEM_COSM_COSD';

    /**
     * Perfume
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_COSM_PERF Ontology
     */
    case CHEM_COSM_PERF = 'CHEM_COSM_PERF';

    /**
     * Dangerous Goods
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_DGRG Ontology
     */
    case CHEM_DGRG = 'CHEM_DGRG';

    /**
     * Explosives
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_DGRG_EXPL Ontology
     */
    case CHEM_DGRG_EXPL = 'CHEM_DGRG_EXPL';

    /**
     * Dry ice
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_DICE Ontology
     */
    case CHEM_DICE = 'CHEM_DICE';

    /**
     * Paint
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_PAIN Ontology
     */
    case CHEM_PAIN = 'CHEM_PAIN';

    /**
     * Petroleum derivatives
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_PETRO Ontology
     */
    case CHEM_PETRO = 'CHEM_PETRO';

    /**
     * Radioactive materials
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_RADA Ontology
     */
    case CHEM_RADA = 'CHEM_RADA';

    /**
     * Reagents
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CHEM_REAG Ontology
     */
    case CHEM_REAG = 'CHEM_REAG';

    /**
     * Consumer goods
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS Ontology
     */
    case CONS = 'CONS';

    /**
     * Company material
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_CMPY Ontology
     */
    case CONS_CMPY = 'CONS_CMPY';

    /**
     * Chinaware and Ceramics
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_CWRE Ontology
     */
    case CONS_CWRE = 'CONS_CWRE';

    /**
     * Diplomatic mail and goods
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_DIPL Ontology
     */
    case CONS_DIPL = 'CONS_DIPL';

    /**
     * Exhibition goods
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_EXHB Ontology
     */
    case CONS_EXHB = 'CONS_EXHB';

    /**
     * Furniture
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_FRNT Ontology
     */
    case CONS_FRNT = 'CONS_FRNT';

    /**
     * Glassware
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_GLAS Ontology
     */
    case CONS_GLAS = 'CONS_GLAS';

    /**
     * Humanitarian aid
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_HAID Ontology
     */
    case CONS_HAID = 'CONS_HAID';

    /**
     * Household goods
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_HHGD Ontology
     */
    case CONS_HHGD = 'CONS_HHGD';

    /**
     * Horse equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_HRSE Ontology
     */
    case CONS_HRSE = 'CONS_HRSE';

    /**
     * House removal
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_HSER Ontology
     */
    case CONS_HSER = 'CONS_HSER';

    /**
     * Office supplies
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_OFSP Ontology
     */
    case CONS_OFSP = 'CONS_OFSP';

    /**
     * Personal effects
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_PERS Ontology
     */
    case CONS_PERS = 'CONS_PERS';

    /**
     * Spectacles
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_SPEC Ontology
     */
    case CONS_SPEC = 'CONS_SPEC';

    /**
     * Sports equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_SPRT Ontology
     */
    case CONS_SPRT = 'CONS_SPRT';

    /**
     * Toys and Games
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_TOYS Ontology
     */
    case CONS_TOYS = 'CONS_TOYS';

    /**
     * Unaccompagnied baggage
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_CONS_UBAG Ontology
     */
    case CONS_UBAG = 'CONS_UBAG';

    /**
     * Electronic equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_ELEC Ontology
     */
    case ELEC = 'ELEC';

    /**
     * Audio-Video-HiFi equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_ELEC_AVEQ Ontology
     */
    case ELEC_AVEQ = 'ELEC_AVEQ';

    /**
     * Calculators
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_ELEC_CALC Ontology
     */
    case ELEC_CALC = 'ELEC_CALC';

    /**
     * Computers
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_ELEC_CMPT Ontology
     */
    case ELEC_CMPT = 'ELEC_CMPT';

    /**
     * Computer parts
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_ELEC_CPRT Ontology
     */
    case ELEC_CPRT = 'ELEC_CPRT';

    /**
     * Electronic components
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_ELEC_ECOM Ontology
     */
    case ELEC_ECOM = 'ELEC_ECOM';

    /**
     * Electronic equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_ELEC_EEQP Ontology
     */
    case ELEC_EEQP = 'ELEC_EEQP';

    /**
     * Electronic goods
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_ELEC_EGDS Ontology
     */
    case ELEC_EGDS = 'ELEC_EGDS';

    /**
     * Electrical equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_ELEC_ELQP Ontology
     */
    case ELEC_ELQP = 'ELEC_ELQP';

    /**
     * Office equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_ELEC_OFEQ Ontology
     */
    case ELEC_OFEQ = 'ELEC_OFEQ';

    /**
     * Quantum
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_ELEC_QUAN Ontology
     */
    case ELEC_QUAN = 'ELEC_QUAN';

    /**
     * Telecom equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_ELEC_TELC Ontology
     */
    case ELEC_TELC = 'ELEC_TELC';

    /**
     * Plants, Flowers, Seeds
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR Ontology
     */
    case FLWR = 'FLWR';

    /**
     * Fresh flowers
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR_FLWR Ontology
     */
    case FLWR_FLWR = 'FLWR_FLWR';

    /**
     * Cut flowers
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR_FLWR_CFLW Ontology
     */
    case FLWR_FLWR_CFLW = 'FLWR_FLWR_CFLW';

    /**
     * Tropical flowers
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR_FLWR_TFLW Ontology
     */
    case FLWR_FLWR_TFLW = 'FLWR_FLWR_TFLW';

    /**
     * Fresh tulips
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR_FLWR_TULP Ontology
     */
    case FLWR_FLWR_TULP = 'FLWR_FLWR_TULP';

    /**
     * Fresh mint
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR_FMNT Ontology
     */
    case FLWR_FMNT = 'FLWR_FMNT';

    /**
     * Herbs, Leaves and Foliage
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR_HERBS Ontology
     */
    case FLWR_HERBS = 'FLWR_HERBS';

    /**
     * Plants
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR_PLNT Ontology
     */
    case FLWR_PLNT = 'FLWR_PLNT';

    /**
     * Aquatic plants
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR_PLNT_APLN Ontology
     */
    case FLWR_PLNT_APLN = 'FLWR_PLNT_APLN';

    /**
     * Bulbs and Tubers
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR_PLNT_BULB Ontology
     */
    case FLWR_PLNT_BULB = 'FLWR_PLNT_BULB';

    /**
     * Medicinal plants
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR_PLNT_MPLN Ontology
     */
    case FLWR_PLNT_MPLN = 'FLWR_PLNT_MPLN';

    /**
     * Tropical plants
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR_PLNT_TPLN Ontology
     */
    case FLWR_PLNT_TPLN = 'FLWR_PLNT_TPLN';

    /**
     * Seeds
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FLWR_SEED Ontology
     */
    case FLWR_SEED = 'FLWR_SEED';

    /**
     * Foodstuffs, Drinks and Tobacco
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD Ontology
     */
    case FOOD = 'FOOD';

    /**
     * Beverages
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_BVRG Ontology
     */
    case FOOD_BVRG = 'FOOD_BVRG';

    /**
     * Beer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_BVRG_BEER Ontology
     */
    case FOOD_BVRG_BEER = 'FOOD_BVRG_BEER';

    /**
     * Coffee
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_BVRG_COFY Ontology
     */
    case FOOD_BVRG_COFY = 'FOOD_BVRG_COFY';

    /**
     * Tea
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_BVRG_TEA Ontology
     */
    case FOOD_BVRG_TEA = 'FOOD_BVRG_TEA';

    /**
     * Wine
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_BVRG_WINE Ontology
     */
    case FOOD_BVRG_WINE = 'FOOD_BVRG_WINE';

    /**
     * Cereal foods
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_CERE Ontology
     */
    case FOOD_CERE = 'FOOD_CERE';

    /**
     * Bread
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_CERE_BRED Ontology
     */
    case FOOD_CERE_BRED = 'FOOD_CERE_BRED';

    /**
     * Cakes and Pastries
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_CERE_CAKE Ontology
     */
    case FOOD_CERE_CAKE = 'FOOD_CERE_CAKE';

    /**
     * Dairy products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_DARY Ontology
     */
    case FOOD_DARY = 'FOOD_DARY';

    /**
     * Cheese
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_DARY_CHSE Ontology
     */
    case FOOD_DARY_CHSE = 'FOOD_DARY_CHSE';

    /**
     * Eggs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_DARY_EGGS Ontology
     */
    case FOOD_DARY_EGGS = 'FOOD_DARY_EGGS';

    /**
     * Ice cream
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_DARY_ICEC Ontology
     */
    case FOOD_DARY_ICEC = 'FOOD_DARY_ICEC';

    /**
     * Fish and Seafood
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH Ontology
     */
    case FOOD_FISH = 'FOOD_FISH';

    /**
     * Albacora
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_ALBA Ontology
     */
    case FOOD_FISH_ALBA = 'FOOD_FISH_ALBA';

    /**
     * Caviar
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_CAVR Ontology
     */
    case FOOD_FISH_CAVR = 'FOOD_FISH_CAVR';

    /**
     * Fresh fish
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_FFSH Ontology
     */
    case FOOD_FISH_FFSH = 'FOOD_FISH_FFSH';

    /**
     * Frozen fish
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_FRZF Ontology
     */
    case FOOD_FISH_FRZF = 'FOOD_FISH_FRZF';

    /**
     * Frozen seafood
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_FRZS Ontology
     */
    case FOOD_FISH_FRZS = 'FOOD_FISH_FRZS';

    /**
     * Hake
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_HAKE Ontology
     */
    case FOOD_FISH_HAKE = 'FOOD_FISH_HAKE';

    /**
     * Lobsters and Crabs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_LOBS Ontology
     */
    case FOOD_FISH_LOBS = 'FOOD_FISH_LOBS';

    /**
     * Reineta and Palometa
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_REPA Ontology
     */
    case FOOD_FISH_REPA = 'FOOD_FISH_REPA';

    /**
     * Shark fin
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_SFIN Ontology
     */
    case FOOD_FISH_SFIN = 'FOOD_FISH_SFIN';

    /**
     * Smoked fish
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_SFSH Ontology
     */
    case FOOD_FISH_SFSH = 'FOOD_FISH_SFSH';

    /**
     * Shrimps and Prawns
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_SHRI Ontology
     */
    case FOOD_FISH_SHRI = 'FOOD_FISH_SHRI';

    /**
     * Salmon
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_SLMN Ontology
     */
    case FOOD_FISH_SLMN = 'FOOD_FISH_SLMN';

    /**
     * Tuna
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FISH_TUNA Ontology
     */
    case FOOD_FISH_TUNA = 'FOOD_FISH_TUNA';

    /**
     * Fruits and Vegetables
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV Ontology
     */
    case FOOD_FRTV = 'FOOD_FRTV';

    /**
     * Apples
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_APPL Ontology
     */
    case FOOD_FRTV_APPL = 'FOOD_FRTV_APPL';

    /**
     * Asparagus
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_ASPA Ontology
     */
    case FOOD_FRTV_ASPA = 'FOOD_FRTV_ASPA';

    /**
     * Avocados
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_AVOC Ontology
     */
    case FOOD_FRTV_AVOC = 'FOOD_FRTV_AVOC';

    /**
     * Bananas
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_BANA Ontology
     */
    case FOOD_FRTV_BANA = 'FOOD_FRTV_BANA';

    /**
     * String beans
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_BEAN Ontology
     */
    case FOOD_FRTV_BEAN = 'FOOD_FRTV_BEAN';

    /**
     * Berries
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_BERR Ontology
     */
    case FOOD_FRTV_BERR = 'FOOD_FRTV_BERR';

    /**
     * Cherries
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_CHER Ontology
     */
    case FOOD_FRTV_CHER = 'FOOD_FRTV_CHER';

    /**
     * Cucumber
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_CMBR Ontology
     */
    case FOOD_FRTV_CMBR = 'FOOD_FRTV_CMBR';

    /**
     * Durian
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_DURI Ontology
     */
    case FOOD_FRTV_DURI = 'FOOD_FRTV_DURI';

    /**
     * Garlic
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_GARL Ontology
     */
    case FOOD_FRTV_GARL = 'FOOD_FRTV_GARL';

    /**
     * Grapes
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_GRAP Ontology
     */
    case FOOD_FRTV_GRAP = 'FOOD_FRTV_GRAP';

    /**
     * Litchies
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_LITC Ontology
     */
    case FOOD_FRTV_LITC = 'FOOD_FRTV_LITC';

    /**
     * Mangoes
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_MANG Ontology
     */
    case FOOD_FRTV_MANG = 'FOOD_FRTV_MANG';

    /**
     * Melons
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_MLNS Ontology
     */
    case FOOD_FRTV_MLNS = 'FOOD_FRTV_MLNS';

    /**
     * Mushrooms
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_MUSH Ontology
     */
    case FOOD_FRTV_MUSH = 'FOOD_FRTV_MUSH';

    /**
     * Peppers
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_PEPP Ontology
     */
    case FOOD_FRTV_PEPP = 'FOOD_FRTV_PEPP';

    /**
     * Pineapple
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_PINE Ontology
     */
    case FOOD_FRTV_PINE = 'FOOD_FRTV_PINE';

    /**
     * Papaya
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_PPYA Ontology
     */
    case FOOD_FRTV_PPYA = 'FOOD_FRTV_PPYA';

    /**
     * Produce
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_PROD Ontology
     */
    case FOOD_FRTV_PROD = 'FOOD_FRTV_PROD';

    /**
     * Strawberries
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_STRW Ontology
     */
    case FOOD_FRTV_STRW = 'FOOD_FRTV_STRW';

    /**
     * Tomatoes
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_FRTV_TOMA Ontology
     */
    case FOOD_FRTV_TOMA = 'FOOD_FRTV_TOMA';

    /**
     * Meat products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_MEAT Ontology
     */
    case FOOD_MEAT = 'FOOD_MEAT';

    /**
     * Beef products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_MEAT_BEEF Ontology
     */
    case FOOD_MEAT_BEEF = 'FOOD_MEAT_BEEF';

    /**
     * Dried meat
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_MEAT_DRIM Ontology
     */
    case FOOD_MEAT_DRIM = 'FOOD_MEAT_DRIM';

    /**
     * Frozen meat
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_MEAT_FRZM Ontology
     */
    case FOOD_MEAT_FRZM = 'FOOD_MEAT_FRZM';

    /**
     * Goose liver
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_MEAT_GOSL Ontology
     */
    case FOOD_MEAT_GOSL = 'FOOD_MEAT_GOSL';

    /**
     * Guts
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_MEAT_GUTS Ontology
     */
    case FOOD_MEAT_GUTS = 'FOOD_MEAT_GUTS';

    /**
     * Horse products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_MEAT_HRSP Ontology
     */
    case FOOD_MEAT_HRSP = 'FOOD_MEAT_HRSP';

    /**
     * Meat
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_MEAT_MEAT Ontology
     */
    case FOOD_MEAT_MEAT = 'FOOD_MEAT_MEAT';

    /**
     * Pork products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_MEAT_PORK Ontology
     */
    case FOOD_MEAT_PORK = 'FOOD_MEAT_PORK';

    /**
     * Sausages
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_MEAT_SAUS Ontology
     */
    case FOOD_MEAT_SAUS = 'FOOD_MEAT_SAUS';

    /**
     * Perhishables
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_PERI Ontology
     */
    case FOOD_PERI = 'FOOD_PERI';

    /**
     * Foodstuffs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_STUF Ontology
     */
    case FOOD_STUF = 'FOOD_STUF';

    /**
     * Catering products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_STUF_CATE Ontology
     */
    case FOOD_STUF_CATE = 'FOOD_STUF_CATE';

    /**
     * Chocolate
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_STUF_CHOC Ontology
     */
    case FOOD_STUF_CHOC = 'FOOD_STUF_CHOC';

    /**
     * Dried fruit
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_STUF_DFRU Ontology
     */
    case FOOD_STUF_DFRU = 'FOOD_STUF_DFRU';

    /**
     * Milk powder
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_STUF_MPWD Ontology
     */
    case FOOD_STUF_MPWD = 'FOOD_STUF_MPWD';

    /**
     * Nuts
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_STUF_NUTS Ontology
     */
    case FOOD_STUF_NUTS = 'FOOD_STUF_NUTS';

    /**
     * Olive oil
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_STUF_OOIL Ontology
     */
    case FOOD_STUF_OOIL = 'FOOD_STUF_OOIL';

    /**
     * Spices and Roots
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_STUF_SPCE Ontology
     */
    case FOOD_STUF_SPCE = 'FOOD_STUF_SPCE';

    /**
     * Tobacco products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_TBCO Ontology
     */
    case FOOD_TBCO = 'FOOD_TBCO';

    /**
     * Cigarettes
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_TBCO_CGRT Ontology
     */
    case FOOD_TBCO_CGRT = 'FOOD_TBCO_CGRT';

    /**
     * Cigars
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_FOOD_TBCO_CIGA Ontology
     */
    case FOOD_TBCO_CIGA = 'FOOD_TBCO_CIGA';

    /**
     * General Cargo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_GENE Ontology
     */
    case GENE = 'GENE';

    /**
     * Human Remains
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_HUMR Ontology
     */
    case HUMR = 'HUMR';

    /**
     * Human remains not cremated
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_HUMR_HUMB Ontology
     */
    case HUMR_HUMB = 'HUMR_HUMB';

    /**
     * Human remains cremated
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_HUMR_HUMC Ontology
     */
    case HUMR_HUMC = 'HUMR_HUMC';

    /**
     * Live Animals
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE Ontology
     */
    case LIVE = 'LIVE';

    /**
     * Birds & Hatching Eggs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_BRDH Ontology
     */
    case LIVE_BRDH = 'LIVE_BRDH';

    /**
     * Birds
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_BRDH_BIRD Ontology
     */
    case LIVE_BRDH_BIRD = 'LIVE_BRDH_BIRD';

    /**
     * Chicks
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_BRDH_CHIC Ontology
     */
    case LIVE_BRDH_CHIC = 'LIVE_BRDH_CHIC';

    /**
     * Ducks
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_BRDH_DUCK Ontology
     */
    case LIVE_BRDH_DUCK = 'LIVE_BRDH_DUCK';

    /**
     * Hatching Eggs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_BRDH_HEGG Ontology
     */
    case LIVE_BRDH_HEGG = 'LIVE_BRDH_HEGG';

    /**
     * Ostriches
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_BRDH_OSTR Ontology
     */
    case LIVE_BRDH_OSTR = 'LIVE_BRDH_OSTR';

    /**
     * Parrots
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_BRDH_PARR Ontology
     */
    case LIVE_BRDH_PARR = 'LIVE_BRDH_PARR';

    /**
     * Turkeys
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_BRDH_TRKY Ontology
     */
    case LIVE_BRDH_TRKY = 'LIVE_BRDH_TRKY';

    /**
     * Insects
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_INSC Ontology
     */
    case LIVE_INSC = 'LIVE_INSC';

    /**
     * Bees
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_INSC_BEES Ontology
     */
    case LIVE_INSC_BEES = 'LIVE_INSC_BEES';

    /**
     * Fish
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_LFSH Ontology
     */
    case LIVE_LFSH = 'LIVE_LFSH';

    /**
     * Eels
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_LFSH_EELS Ontology
     */
    case LIVE_LFSH_EELS = 'LIVE_LFSH_EELS';

    /**
     * Koi fish
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_LFSH_KOIF Ontology
     */
    case LIVE_LFSH_KOIF = 'LIVE_LFSH_KOIF';

    /**
     * Tropical fish
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_LFSH_TRPF Ontology
     */
    case LIVE_LFSH_TRPF = 'LIVE_LFSH_TRPF';

    /**
     * Mollusks
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MLKS Ontology
     */
    case LIVE_MLKS = 'LIVE_MLKS';

    /**
     * Lugworms
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MLKS_LUGW Ontology
     */
    case LIVE_MLKS_LUGW = 'LIVE_MLKS_LUGW';

    /**
     * Snails
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MLKS_SNAI Ontology
     */
    case LIVE_MLKS_SNAI = 'LIVE_MLKS_SNAI';

    /**
     * Mammals
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS Ontology
     */
    case LIVE_MMLS = 'LIVE_MMLS';

    /**
     * Cattle
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATL Ontology
     */
    case LIVE_MMLS_CATL = 'LIVE_MMLS_CATL';

    /**
     * Cats
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS Ontology
     */
    case LIVE_MMLS_CATS = 'LIVE_MMLS_CATS';

    /**
     * Abyssinian
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Abyssinian Ontology
     */
    case LIVE_MMLS_CATS_Abyssinian = 'LIVE_MMLS_CATS_Abyssinian';

    /**
     * American Bobtail
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_American_Bobtail Ontology
     */
    case LIVE_MMLS_CATS_American_Bobtail = 'LIVE_MMLS_CATS_American_Bobtail';

    /**
     * American Curl
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_American_Curl Ontology
     */
    case LIVE_MMLS_CATS_American_Curl = 'LIVE_MMLS_CATS_American_Curl';

    /**
     * American Keuda
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_American_Keuda Ontology
     */
    case LIVE_MMLS_CATS_American_Keuda = 'LIVE_MMLS_CATS_American_Keuda';

    /**
     * American Lynx
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_American_Lynx Ontology
     */
    case LIVE_MMLS_CATS_American_Lynx = 'LIVE_MMLS_CATS_American_Lynx';

    /**
     * American Polydactyl
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_American_Polydactyl Ontology
     */
    case LIVE_MMLS_CATS_American_Polydactyl = 'LIVE_MMLS_CATS_American_Polydactyl';

    /**
     * American Shorthair
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_American_Shorthair Ontology
     */
    case LIVE_MMLS_CATS_American_Shorthair = 'LIVE_MMLS_CATS_American_Shorthair';

    /**
     * American Wirehair
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_American_Wirehair Ontology
     */
    case LIVE_MMLS_CATS_American_Wirehair = 'LIVE_MMLS_CATS_American_Wirehair';

    /**
     * Asian
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Asian Ontology
     */
    case LIVE_MMLS_CATS_Asian = 'LIVE_MMLS_CATS_Asian';

    /**
     * Australian Mist
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Australian_Mist Ontology
     */
    case LIVE_MMLS_CATS_Australian_Mist = 'LIVE_MMLS_CATS_Australian_Mist';

    /**
     * Balinese
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Balinese Ontology
     */
    case LIVE_MMLS_CATS_Balinese = 'LIVE_MMLS_CATS_Balinese';

    /**
     * Bengal
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Bengal Ontology
     */
    case LIVE_MMLS_CATS_Bengal = 'LIVE_MMLS_CATS_Bengal';

    /**
     * Birman
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Birman Ontology
     */
    case LIVE_MMLS_CATS_Birman = 'LIVE_MMLS_CATS_Birman';

    /**
     * Bombay
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Bombay Ontology
     */
    case LIVE_MMLS_CATS_Bombay = 'LIVE_MMLS_CATS_Bombay';

    /**
     * Bristol
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Bristol Ontology
     */
    case LIVE_MMLS_CATS_Bristol = 'LIVE_MMLS_CATS_Bristol';

    /**
     * British Shorthair
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_British_Shorthair Ontology
     */
    case LIVE_MMLS_CATS_British_Shorthair = 'LIVE_MMLS_CATS_British_Shorthair';

    /**
     * Burmese
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Burmese Ontology
     */
    case LIVE_MMLS_CATS_Burmese = 'LIVE_MMLS_CATS_Burmese';

    /**
     * California Spangled
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_California_Spangled Ontology
     */
    case LIVE_MMLS_CATS_California_Spangled = 'LIVE_MMLS_CATS_California_Spangled';

    /**
     * Chartreux
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Chartreux Ontology
     */
    case LIVE_MMLS_CATS_Chartreux = 'LIVE_MMLS_CATS_Chartreux';

    /**
     * Chausie
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Chausie Ontology
     */
    case LIVE_MMLS_CATS_Chausie = 'LIVE_MMLS_CATS_Chausie';

    /**
     * Chinese Harlequin
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Chinese_Harlequin Ontology
     */
    case LIVE_MMLS_CATS_Chinese_Harlequin = 'LIVE_MMLS_CATS_Chinese_Harlequin';

    /**
     * Color Point Shorthair
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Color_Point_Shorthair Ontology
     */
    case LIVE_MMLS_CATS_Color_Point_Shorthair = 'LIVE_MMLS_CATS_Color_Point_Shorthair';

    /**
     * Copper
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Copper Ontology
     */
    case LIVE_MMLS_CATS_Copper = 'LIVE_MMLS_CATS_Copper';

    /**
     * Cornish Rex
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Cornish_Rex Ontology
     */
    case LIVE_MMLS_CATS_Cornish_Rex = 'LIVE_MMLS_CATS_Cornish_Rex';

    /**
     * Cymric
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Cymric Ontology
     */
    case LIVE_MMLS_CATS_Cymric = 'LIVE_MMLS_CATS_Cymric';

    /**
     * Desert Lynx
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Desert_Lynx Ontology
     */
    case LIVE_MMLS_CATS_Desert_Lynx = 'LIVE_MMLS_CATS_Desert_Lynx';

    /**
     * Devon Rex
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Devon_Rex Ontology
     */
    case LIVE_MMLS_CATS_Devon_Rex = 'LIVE_MMLS_CATS_Devon_Rex';

    /**
     * Donskoy
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Donskoy Ontology
     */
    case LIVE_MMLS_CATS_Donskoy = 'LIVE_MMLS_CATS_Donskoy';

    /**
     * Egyptian Mau
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Egyptian_Mau Ontology
     */
    case LIVE_MMLS_CATS_Egyptian_Mau = 'LIVE_MMLS_CATS_Egyptian_Mau';

    /**
     * Exotic Shorthair
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Exotic_Shorthair Ontology
     */
    case LIVE_MMLS_CATS_Exotic_Shorthair = 'LIVE_MMLS_CATS_Exotic_Shorthair';

    /**
     * Havana
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Havana Ontology
     */
    case LIVE_MMLS_CATS_Havana = 'LIVE_MMLS_CATS_Havana';

    /**
     * Highland Lynx
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Highland_Lynx Ontology
     */
    case LIVE_MMLS_CATS_Highland_Lynx = 'LIVE_MMLS_CATS_Highland_Lynx';

    /**
     * Himalayan
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Himalayan Ontology
     */
    case LIVE_MMLS_CATS_Himalayan = 'LIVE_MMLS_CATS_Himalayan';

    /**
     * Japanese Bobtail
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Japanese_Bobtail Ontology
     */
    case LIVE_MMLS_CATS_Japanese_Bobtail = 'LIVE_MMLS_CATS_Japanese_Bobtail';

    /**
     * Javanese
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Javanese Ontology
     */
    case LIVE_MMLS_CATS_Javanese = 'LIVE_MMLS_CATS_Javanese';

    /**
     * Korat
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Korat Ontology
     */
    case LIVE_MMLS_CATS_Korat = 'LIVE_MMLS_CATS_Korat';

    /**
     * LaPerm
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_LaPerm Ontology
     */
    case LIVE_MMLS_CATS_LaPerm = 'LIVE_MMLS_CATS_LaPerm';

    /**
     * Maine Coon
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Maine_Coon Ontology
     */
    case LIVE_MMLS_CATS_Maine_Coon = 'LIVE_MMLS_CATS_Maine_Coon';

    /**
     * Manx
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Manx Ontology
     */
    case LIVE_MMLS_CATS_Manx = 'LIVE_MMLS_CATS_Manx';

    /**
     * Mojave Spotted
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Mojave_Spotted Ontology
     */
    case LIVE_MMLS_CATS_Mojave_Spotted = 'LIVE_MMLS_CATS_Mojave_Spotted';

    /**
     * Munchkin
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Munchkin Ontology
     */
    case LIVE_MMLS_CATS_Munchkin = 'LIVE_MMLS_CATS_Munchkin';

    /**
     * Niebelung
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Niebelung Ontology
     */
    case LIVE_MMLS_CATS_Niebelung = 'LIVE_MMLS_CATS_Niebelung';

    /**
     * Norwegian Forest
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Norwegian_Forest Ontology
     */
    case LIVE_MMLS_CATS_Norwegian_Forest = 'LIVE_MMLS_CATS_Norwegian_Forest';

    /**
     * Ocicat
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Ocicat Ontology
     */
    case LIVE_MMLS_CATS_Ocicat = 'LIVE_MMLS_CATS_Ocicat';

    /**
     * Ojos Azules
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Ojos_Azules Ontology
     */
    case LIVE_MMLS_CATS_Ojos_Azules = 'LIVE_MMLS_CATS_Ojos_Azules';

    /**
     * Oriental
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Oriental Ontology
     */
    case LIVE_MMLS_CATS_Oriental = 'LIVE_MMLS_CATS_Oriental';

    /**
     * Pantherette
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Pantherette Ontology
     */
    case LIVE_MMLS_CATS_Pantherette = 'LIVE_MMLS_CATS_Pantherette';

    /**
     * Persian
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Persian Ontology
     */
    case LIVE_MMLS_CATS_Persian = 'LIVE_MMLS_CATS_Persian';

    /**
     * Peterbald
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Peterbald Ontology
     */
    case LIVE_MMLS_CATS_Peterbald = 'LIVE_MMLS_CATS_Peterbald';

    /**
     * Pixiebob
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Pixiebob Ontology
     */
    case LIVE_MMLS_CATS_Pixiebob = 'LIVE_MMLS_CATS_Pixiebob';

    /**
     * Ragamuffin
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Ragamuffin Ontology
     */
    case LIVE_MMLS_CATS_Ragamuffin = 'LIVE_MMLS_CATS_Ragamuffin';

    /**
     * Ragdoll
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Ragdoll Ontology
     */
    case LIVE_MMLS_CATS_Ragdoll = 'LIVE_MMLS_CATS_Ragdoll';

    /**
     * Russian Blue
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Russian_Blue Ontology
     */
    case LIVE_MMLS_CATS_Russian_Blue = 'LIVE_MMLS_CATS_Russian_Blue';

    /**
     * Safari
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Safari Ontology
     */
    case LIVE_MMLS_CATS_Safari = 'LIVE_MMLS_CATS_Safari';

    /**
     * Savannah
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Savannah Ontology
     */
    case LIVE_MMLS_CATS_Savannah = 'LIVE_MMLS_CATS_Savannah';

    /**
     * Scottish Fold
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Scottish_Fold Ontology
     */
    case LIVE_MMLS_CATS_Scottish_Fold = 'LIVE_MMLS_CATS_Scottish_Fold';

    /**
     * Selkirk Rex
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Selkirk_Rex Ontology
     */
    case LIVE_MMLS_CATS_Selkirk_Rex = 'LIVE_MMLS_CATS_Selkirk_Rex';

    /**
     * Serengeti
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Serengeti Ontology
     */
    case LIVE_MMLS_CATS_Serengeti = 'LIVE_MMLS_CATS_Serengeti';

    /**
     * Siamese
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Siamese Ontology
     */
    case LIVE_MMLS_CATS_Siamese = 'LIVE_MMLS_CATS_Siamese';

    /**
     * Siberian
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Siberian Ontology
     */
    case LIVE_MMLS_CATS_Siberian = 'LIVE_MMLS_CATS_Siberian';

    /**
     * Singapura
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Singapura Ontology
     */
    case LIVE_MMLS_CATS_Singapura = 'LIVE_MMLS_CATS_Singapura';

    /**
     * Snowshoe
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Snowshoe Ontology
     */
    case LIVE_MMLS_CATS_Snowshoe = 'LIVE_MMLS_CATS_Snowshoe';

    /**
     * Somali
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Somali Ontology
     */
    case LIVE_MMLS_CATS_Somali = 'LIVE_MMLS_CATS_Somali';

    /**
     * Sphynx
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Sphynx Ontology
     */
    case LIVE_MMLS_CATS_Sphynx = 'LIVE_MMLS_CATS_Sphynx';

    /**
     * Tiffany
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Tiffany Ontology
     */
    case LIVE_MMLS_CATS_Tiffany = 'LIVE_MMLS_CATS_Tiffany';

    /**
     * Tonkinese
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Tonkinese Ontology
     */
    case LIVE_MMLS_CATS_Tonkinese = 'LIVE_MMLS_CATS_Tonkinese';

    /**
     * Traditional Siamese
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Traditional_Siamese Ontology
     */
    case LIVE_MMLS_CATS_Traditional_Siamese = 'LIVE_MMLS_CATS_Traditional_Siamese';

    /**
     * Turkish Angora
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Turkish_Angora Ontology
     */
    case LIVE_MMLS_CATS_Turkish_Angora = 'LIVE_MMLS_CATS_Turkish_Angora';

    /**
     * Turkish Van
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Turkish_Van Ontology
     */
    case LIVE_MMLS_CATS_Turkish_Van = 'LIVE_MMLS_CATS_Turkish_Van';

    /**
     * Vienna Woods
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Vienna_Woods Ontology
     */
    case LIVE_MMLS_CATS_Vienna_Woods = 'LIVE_MMLS_CATS_Vienna_Woods';

    /**
     * Viverral-Hybrid Cat
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_Viverral_Hybrid_Cat Ontology
     */
    case LIVE_MMLS_CATS_Viverral_Hybrid_Cat = 'LIVE_MMLS_CATS_Viverral_Hybrid_Cat';

    /**
     * York Chocolate
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_CATS_York_Chocolate Ontology
     */
    case LIVE_MMLS_CATS_York_Chocolate = 'LIVE_MMLS_CATS_York_Chocolate';

    /**
     * Dogs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS Ontology
     */
    case LIVE_MMLS_DOGS = 'LIVE_MMLS_DOGS';

    /**
     * Affenpinscher
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Affenpinscher Ontology
     */
    case LIVE_MMLS_DOGS_Affenpinscher = 'LIVE_MMLS_DOGS_Affenpinscher';

    /**
     * Afghan Hound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Afghan_Hound Ontology
     */
    case LIVE_MMLS_DOGS_Afghan_Hound = 'LIVE_MMLS_DOGS_Afghan_Hound';

    /**
     * Airedale Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Airedale_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Airedale_Terrier = 'LIVE_MMLS_DOGS_Airedale_Terrier';

    /**
     * Akita
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Akita Ontology
     */
    case LIVE_MMLS_DOGS_Akita = 'LIVE_MMLS_DOGS_Akita';

    /**
     * Alangu Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Alangu_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Alangu_Mastiff = 'LIVE_MMLS_DOGS_Alangu_Mastiff';

    /**
     * Alano
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Alano Ontology
     */
    case LIVE_MMLS_DOGS_Alano = 'LIVE_MMLS_DOGS_Alano';

    /**
     * Alaskan Malamute
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Alaskan_Malamute Ontology
     */
    case LIVE_MMLS_DOGS_Alaskan_Malamute = 'LIVE_MMLS_DOGS_Alaskan_Malamute';

    /**
     * American Bulldog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_American_Bulldog Ontology
     */
    case LIVE_MMLS_DOGS_American_Bulldog = 'LIVE_MMLS_DOGS_American_Bulldog';

    /**
     * American Bully
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_American_Bully Ontology
     */
    case LIVE_MMLS_DOGS_American_Bully = 'LIVE_MMLS_DOGS_American_Bully';

    /**
     * American Cocker Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_American_Cocker_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_American_Cocker_Spaniel = 'LIVE_MMLS_DOGS_American_Cocker_Spaniel';

    /**
     * American English Coonhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_American_English_Coonhound Ontology
     */
    case LIVE_MMLS_DOGS_American_English_Coonhound = 'LIVE_MMLS_DOGS_American_English_Coonhound';

    /**
     * American Eskimo Dog-Miniature
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_American_Eskimo_Dog_Miniature Ontology
     */
    case LIVE_MMLS_DOGS_American_Eskimo_Dog_Miniature = 'LIVE_MMLS_DOGS_American_Eskimo_Dog_Miniature';

    /**
     * American Eskimo Dog-Standard
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_American_Eskimo_Dog_Standard Ontology
     */
    case LIVE_MMLS_DOGS_American_Eskimo_Dog_Standard = 'LIVE_MMLS_DOGS_American_Eskimo_Dog_Standard';

    /**
     * American Eskimo Dog-Toy
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_American_Eskimo_Dog_Toy Ontology
     */
    case LIVE_MMLS_DOGS_American_Eskimo_Dog_Toy = 'LIVE_MMLS_DOGS_American_Eskimo_Dog_Toy';

    /**
     * American Foxhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_American_Foxhound Ontology
     */
    case LIVE_MMLS_DOGS_American_Foxhound = 'LIVE_MMLS_DOGS_American_Foxhound';

    /**
     * American Hairless Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_American_Hairless_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_American_Hairless_Terrier = 'LIVE_MMLS_DOGS_American_Hairless_Terrier';

    /**
     * American Pit Bull Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_American_Pit_Bull_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_American_Pit_Bull_Terrier = 'LIVE_MMLS_DOGS_American_Pit_Bull_Terrier';

    /**
     * American Staffordshire Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_American_Staffordshire_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_American_Staffordshire_Terrier = 'LIVE_MMLS_DOGS_American_Staffordshire_Terrier';

    /**
     * American Water Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_American_Water_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_American_Water_Spaniel = 'LIVE_MMLS_DOGS_American_Water_Spaniel';

    /**
     * Anatolian Shepherd Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Anatolian_Shepherd_Dog Ontology
     */
    case LIVE_MMLS_DOGS_Anatolian_Shepherd_Dog = 'LIVE_MMLS_DOGS_Anatolian_Shepherd_Dog';

    /**
     * Argentinian Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Argentinian_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Argentinian_Mastiff = 'LIVE_MMLS_DOGS_Argentinian_Mastiff';

    /**
     * Aussiedoodle
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Aussiedoodle Ontology
     */
    case LIVE_MMLS_DOGS_Aussiedoodle = 'LIVE_MMLS_DOGS_Aussiedoodle';

    /**
     * Australian Cattle Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Australian_Cattle_Dog Ontology
     */
    case LIVE_MMLS_DOGS_Australian_Cattle_Dog = 'LIVE_MMLS_DOGS_Australian_Cattle_Dog';

    /**
     * Australian Shepherd
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Australian_Shepherd Ontology
     */
    case LIVE_MMLS_DOGS_Australian_Shepherd = 'LIVE_MMLS_DOGS_Australian_Shepherd';

    /**
     * Australian Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Australian_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Australian_Terrier = 'LIVE_MMLS_DOGS_Australian_Terrier';

    /**
     * Ba Shar-Basset Hound Shar pei Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Ba_Shar_Basset_Hound_Shar_pei_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Ba_Shar_Basset_Hound_Shar_pei_Mix = 'LIVE_MMLS_DOGS_Ba_Shar_Basset_Hound_Shar_pei_Mix';

    /**
     * Basenji
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Basenji Ontology
     */
    case LIVE_MMLS_DOGS_Basenji = 'LIVE_MMLS_DOGS_Basenji';

    /**
     * Basset Hound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Basset_Hound Ontology
     */
    case LIVE_MMLS_DOGS_Basset_Hound = 'LIVE_MMLS_DOGS_Basset_Hound';

    /**
     * Beagle
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Beagle Ontology
     */
    case LIVE_MMLS_DOGS_Beagle = 'LIVE_MMLS_DOGS_Beagle';

    /**
     * Bearded Collie
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bearded_Collie Ontology
     */
    case LIVE_MMLS_DOGS_Bearded_Collie = 'LIVE_MMLS_DOGS_Bearded_Collie';

    /**
     * Beauceron
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Beauceron Ontology
     */
    case LIVE_MMLS_DOGS_Beauceron = 'LIVE_MMLS_DOGS_Beauceron';

    /**
     * Bedlington Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bedlington_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Bedlington_Terrier = 'LIVE_MMLS_DOGS_Bedlington_Terrier';

    /**
     * Belgian Malinois
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Belgian_Malinois Ontology
     */
    case LIVE_MMLS_DOGS_Belgian_Malinois = 'LIVE_MMLS_DOGS_Belgian_Malinois';

    /**
     * Belgian Sheepdog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Belgian_Sheepdog Ontology
     */
    case LIVE_MMLS_DOGS_Belgian_Sheepdog = 'LIVE_MMLS_DOGS_Belgian_Sheepdog';

    /**
     * Belgian Tervuren
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Belgian_Tervuren Ontology
     */
    case LIVE_MMLS_DOGS_Belgian_Tervuren = 'LIVE_MMLS_DOGS_Belgian_Tervuren';

    /**
     * Bergamasco
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bergamasco Ontology
     */
    case LIVE_MMLS_DOGS_Bergamasco = 'LIVE_MMLS_DOGS_Bergamasco';

    /**
     * Berger Picard
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Berger_Picard Ontology
     */
    case LIVE_MMLS_DOGS_Berger_Picard = 'LIVE_MMLS_DOGS_Berger_Picard';

    /**
     * Bernedoodle
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bernedoodle Ontology
     */
    case LIVE_MMLS_DOGS_Bernedoodle = 'LIVE_MMLS_DOGS_Bernedoodle';

    /**
     * Bernese Mountain Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bernese_Mountain_Dog Ontology
     */
    case LIVE_MMLS_DOGS_Bernese_Mountain_Dog = 'LIVE_MMLS_DOGS_Bernese_Mountain_Dog';

    /**
     * Bichon Frise
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bichon_Frise Ontology
     */
    case LIVE_MMLS_DOGS_Bichon_Frise = 'LIVE_MMLS_DOGS_Bichon_Frise';

    /**
     * Black Russian Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Black_Russian_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Black_Russian_Terrier = 'LIVE_MMLS_DOGS_Black_Russian_Terrier';

    /**
     * Black and Tan Coonhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Black_and_Tan_Coonhound Ontology
     */
    case LIVE_MMLS_DOGS_Black_and_Tan_Coonhound = 'LIVE_MMLS_DOGS_Black_and_Tan_Coonhound';

    /**
     * Bloodhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bloodhound Ontology
     */
    case LIVE_MMLS_DOGS_Bloodhound = 'LIVE_MMLS_DOGS_Bloodhound';

    /**
     * Bluetick Coonhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bluetick_Coonhound Ontology
     */
    case LIVE_MMLS_DOGS_Bluetick_Coonhound = 'LIVE_MMLS_DOGS_Bluetick_Coonhound';

    /**
     * Boerboel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Boerboel Ontology
     */
    case LIVE_MMLS_DOGS_Boerboel = 'LIVE_MMLS_DOGS_Boerboel';

    /**
     * Border Collie
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Border_Collie Ontology
     */
    case LIVE_MMLS_DOGS_Border_Collie = 'LIVE_MMLS_DOGS_Border_Collie';

    /**
     * Border Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Border_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Border_Terrier = 'LIVE_MMLS_DOGS_Border_Terrier';

    /**
     * Borzoi
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Borzoi Ontology
     */
    case LIVE_MMLS_DOGS_Borzoi = 'LIVE_MMLS_DOGS_Borzoi';

    /**
     * Boston Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Boston_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Boston_Terrier = 'LIVE_MMLS_DOGS_Boston_Terrier';

    /**
     * Bouvier des Flandres
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bouvier_des_Flandres Ontology
     */
    case LIVE_MMLS_DOGS_Bouvier_des_Flandres = 'LIVE_MMLS_DOGS_Bouvier_des_Flandres';

    /**
     * Boweimar-Boxer Weimaraner Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Boweimar_Boxer_Weimaraner_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Boweimar_Boxer_Weimaraner_Mix = 'LIVE_MMLS_DOGS_Boweimar_Boxer_Weimaraner_Mix';

    /**
     * Boxer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Boxer Ontology
     */
    case LIVE_MMLS_DOGS_Boxer = 'LIVE_MMLS_DOGS_Boxer';

    /**
     * Boykin Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Boykin_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_Boykin_Spaniel = 'LIVE_MMLS_DOGS_Boykin_Spaniel';

    /**
     * Brazilian Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Brazilian_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Brazilian_Mastiff = 'LIVE_MMLS_DOGS_Brazilian_Mastiff';

    /**
     * Briard
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Briard Ontology
     */
    case LIVE_MMLS_DOGS_Briard = 'LIVE_MMLS_DOGS_Briard';

    /**
     * Brittany
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Brittany Ontology
     */
    case LIVE_MMLS_DOGS_Brittany = 'LIVE_MMLS_DOGS_Brittany';

    /**
     * Brussels Griffon
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Brussels_Griffon Ontology
     */
    case LIVE_MMLS_DOGS_Brussels_Griffon = 'LIVE_MMLS_DOGS_Brussels_Griffon';

    /**
     * Bull Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bull_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Bull_Terrier = 'LIVE_MMLS_DOGS_Bull_Terrier';

    /**
     * Bull Terrier-Miniature
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bull_Terrier_Miniature Ontology
     */
    case LIVE_MMLS_DOGS_Bull_Terrier_Miniature = 'LIVE_MMLS_DOGS_Bull_Terrier_Miniature';

    /**
     * Bulldog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bulldog Ontology
     */
    case LIVE_MMLS_DOGS_Bulldog = 'LIVE_MMLS_DOGS_Bulldog';

    /**
     * Bulli Kutta
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bulli_Kutta Ontology
     */
    case LIVE_MMLS_DOGS_Bulli_Kutta = 'LIVE_MMLS_DOGS_Bulli_Kutta';

    /**
     * Bullmastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bullmastiff Ontology
     */
    case LIVE_MMLS_DOGS_Bullmastiff = 'LIVE_MMLS_DOGS_Bullmastiff';

    /**
     * Bully Kutta-Mastiff breed
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Bully_Kutta_Mastiff_breed Ontology
     */
    case LIVE_MMLS_DOGS_Bully_Kutta_Mastiff_breed = 'LIVE_MMLS_DOGS_Bully_Kutta_Mastiff_breed';

    /**
     * Cairn Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Cairn_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Cairn_Terrier = 'LIVE_MMLS_DOGS_Cairn_Terrier';

    /**
     * Campeiro Bulldog-Brazilian Bulldog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Campeiro_Bulldog_Brazilian_Bulldog Ontology
     */
    case LIVE_MMLS_DOGS_Campeiro_Bulldog_Brazilian_Bulldog = 'LIVE_MMLS_DOGS_Campeiro_Bulldog_Brazilian_Bulldog';

    /**
     * Canaan Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Canaan_Dog Ontology
     */
    case LIVE_MMLS_DOGS_Canaan_Dog = 'LIVE_MMLS_DOGS_Canaan_Dog';

    /**
     * Canary Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Canary_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Canary_Mastiff = 'LIVE_MMLS_DOGS_Canary_Mastiff';

    /**
     * Cane Corso
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Cane_Corso Ontology
     */
    case LIVE_MMLS_DOGS_Cane_Corso = 'LIVE_MMLS_DOGS_Cane_Corso';

    /**
     * Cardigan Welsh Corgi
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Cardigan_Welsh_Corgi Ontology
     */
    case LIVE_MMLS_DOGS_Cardigan_Welsh_Corgi = 'LIVE_MMLS_DOGS_Cardigan_Welsh_Corgi';

    /**
     * Catahoula Bulldog-Catahoula Leopard Bulldog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Catahoula_Bulldog_Catahoula_Leopard_Bulldog Ontology
     */
    case LIVE_MMLS_DOGS_Catahoula_Bulldog_Catahoula_Leopard_Bulldog = 'LIVE_MMLS_DOGS_Catahoula_Bulldog_Catahoula_Leopard_Bulldog';

    /**
     * Cavachon-King Charles Spaniel Bichon Frise
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Cavachon_King_Charles_Spaniel_Bichon_Frise Ontology
     */
    case LIVE_MMLS_DOGS_Cavachon_King_Charles_Spaniel_Bichon_Frise = 'LIVE_MMLS_DOGS_Cavachon_King_Charles_Spaniel_Bichon_Frise';

    /**
     * Cavalier King Charles Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Cavalier_King_Charles_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_Cavalier_King_Charles_Spaniel = 'LIVE_MMLS_DOGS_Cavalier_King_Charles_Spaniel';

    /**
     * Cavapoo-Cavalier King Charles Spaniel Poodle
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Cavapoo_Cavalier_King_Charles_Spaniel_Poodle Ontology
     */
    case LIVE_MMLS_DOGS_Cavapoo_Cavalier_King_Charles_Spaniel_Poodle = 'LIVE_MMLS_DOGS_Cavapoo_Cavalier_King_Charles_Spaniel_Poodle';

    /**
     * Cesky Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Cesky_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Cesky_Terrier = 'LIVE_MMLS_DOGS_Cesky_Terrier';

    /**
     * Chesapeake Bay Retriever
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Chesapeake_Bay_Retriever Ontology
     */
    case LIVE_MMLS_DOGS_Chesapeake_Bay_Retriever = 'LIVE_MMLS_DOGS_Chesapeake_Bay_Retriever';

    /**
     * Chihuahua
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Chihuahua Ontology
     */
    case LIVE_MMLS_DOGS_Chihuahua = 'LIVE_MMLS_DOGS_Chihuahua';

    /**
     * Chinese Crested Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Chinese_Crested_Dog Ontology
     */
    case LIVE_MMLS_DOGS_Chinese_Crested_Dog = 'LIVE_MMLS_DOGS_Chinese_Crested_Dog';

    /**
     * Chinese Pug
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Chinese_Pug Ontology
     */
    case LIVE_MMLS_DOGS_Chinese_Pug = 'LIVE_MMLS_DOGS_Chinese_Pug';

    /**
     * Chinese Shar Pei
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Chinese_Shar_Pei Ontology
     */
    case LIVE_MMLS_DOGS_Chinese_Shar_Pei = 'LIVE_MMLS_DOGS_Chinese_Shar_Pei';

    /**
     * Chinook
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Chinook Ontology
     */
    case LIVE_MMLS_DOGS_Chinook = 'LIVE_MMLS_DOGS_Chinook';

    /**
     * Chipin-Chihuahua Minature Pinscher Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Chipin_Chihuahua_Minature_Pinscher_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Chipin_Chihuahua_Minature_Pinscher_Mix = 'LIVE_MMLS_DOGS_Chipin_Chihuahua_Minature_Pinscher_Mix';

    /**
     * Chiweenie-Chihuahua Dachshund Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Chiweenie_Chihuahua_Dachshund_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Chiweenie_Chihuahua_Dachshund_Mix = 'LIVE_MMLS_DOGS_Chiweenie_Chihuahua_Dachshund_Mix';

    /**
     * Chorkie-Chihuahua Yorkshire Terrier Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Chorkie_Chihuahua_Yorkshire_Terrier_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Chorkie_Chihuahua_Yorkshire_Terrier_Mix = 'LIVE_MMLS_DOGS_Chorkie_Chihuahua_Yorkshire_Terrier_Mix';

    /**
     * Chow Chow
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Chow_Chow Ontology
     */
    case LIVE_MMLS_DOGS_Chow_Chow = 'LIVE_MMLS_DOGS_Chow_Chow';

    /**
     * Chow Pei-Chow Chow Shar Pei Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Chow_Pei_Chow_Chow_Shar_Pei_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Chow_Pei_Chow_Chow_Shar_Pei_Mix = 'LIVE_MMLS_DOGS_Chow_Pei_Chow_Chow_Shar_Pei_Mix';

    /**
     * Cirneco dell Etna
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Cirneco_dell_Etna Ontology
     */
    case LIVE_MMLS_DOGS_Cirneco_dell_Etna = 'LIVE_MMLS_DOGS_Cirneco_dell_Etna';

    /**
     * Clumber Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Clumber_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_Clumber_Spaniel = 'LIVE_MMLS_DOGS_Clumber_Spaniel';

    /**
     * Cockapoo-Cocker Spaniel Poodle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Cockapoo_Cocker_Spaniel_Poodle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Cockapoo_Cocker_Spaniel_Poodle_Mix = 'LIVE_MMLS_DOGS_Cockapoo_Cocker_Spaniel_Poodle_Mix';

    /**
     * Cocker Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Cocker_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_Cocker_Spaniel = 'LIVE_MMLS_DOGS_Cocker_Spaniel';

    /**
     * Collie
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Collie Ontology
     */
    case LIVE_MMLS_DOGS_Collie = 'LIVE_MMLS_DOGS_Collie';

    /**
     * Coton de Tulear
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Coton_de_Tulear Ontology
     */
    case LIVE_MMLS_DOGS_Coton_de_Tulear = 'LIVE_MMLS_DOGS_Coton_de_Tulear';

    /**
     * Curly-Coated Retriever
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Curly_Coated_Retriever Ontology
     */
    case LIVE_MMLS_DOGS_Curly_Coated_Retriever = 'LIVE_MMLS_DOGS_Curly_Coated_Retriever';

    /**
     * Dachshund
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Dachshund Ontology
     */
    case LIVE_MMLS_DOGS_Dachshund = 'LIVE_MMLS_DOGS_Dachshund';

    /**
     * Dalmatian
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Dalmatian Ontology
     */
    case LIVE_MMLS_DOGS_Dalmatian = 'LIVE_MMLS_DOGS_Dalmatian';

    /**
     * Dandie Dinmont Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Dandie_Dinmont_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Dandie_Dinmont_Terrier = 'LIVE_MMLS_DOGS_Dandie_Dinmont_Terrier';

    /**
     * Doberman Pinscher
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Doberman_Pinscher Ontology
     */
    case LIVE_MMLS_DOGS_Doberman_Pinscher = 'LIVE_MMLS_DOGS_Doberman_Pinscher';

    /**
     * Dogo Argentino
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Dogo_Argentino Ontology
     */
    case LIVE_MMLS_DOGS_Dogo_Argentino = 'LIVE_MMLS_DOGS_Dogo_Argentino';

    /**
     * Dogue de Bordeaux
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Dogue_de_Bordeaux Ontology
     */
    case LIVE_MMLS_DOGS_Dogue_de_Bordeaux = 'LIVE_MMLS_DOGS_Dogue_de_Bordeaux';

    /**
     * Doxiepoo-Dachshund Poodle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Doxiepoo_Dachshund_Poodle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Doxiepoo_Dachshund_Poodle_Mix = 'LIVE_MMLS_DOGS_Doxiepoo_Dachshund_Poodle_Mix';

    /**
     * Dutch Pug
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Dutch_Pug Ontology
     */
    case LIVE_MMLS_DOGS_Dutch_Pug = 'LIVE_MMLS_DOGS_Dutch_Pug';

    /**
     * English Bulldog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_English_Bulldog Ontology
     */
    case LIVE_MMLS_DOGS_English_Bulldog = 'LIVE_MMLS_DOGS_English_Bulldog';

    /**
     * English Cocker Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_English_Cocker_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_English_Cocker_Spaniel = 'LIVE_MMLS_DOGS_English_Cocker_Spaniel';

    /**
     * English Foxhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_English_Foxhound Ontology
     */
    case LIVE_MMLS_DOGS_English_Foxhound = 'LIVE_MMLS_DOGS_English_Foxhound';

    /**
     * English Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_English_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_English_Mastiff = 'LIVE_MMLS_DOGS_English_Mastiff';

    /**
     * English Setter
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_English_Setter Ontology
     */
    case LIVE_MMLS_DOGS_English_Setter = 'LIVE_MMLS_DOGS_English_Setter';

    /**
     * English Springer Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_English_Springer_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_English_Springer_Spaniel = 'LIVE_MMLS_DOGS_English_Springer_Spaniel';

    /**
     * English Toy Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_English_Toy_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_English_Toy_Spaniel = 'LIVE_MMLS_DOGS_English_Toy_Spaniel';

    /**
     * Entlebucher Mountain Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Entlebucher_Mountain_Dog Ontology
     */
    case LIVE_MMLS_DOGS_Entlebucher_Mountain_Dog = 'LIVE_MMLS_DOGS_Entlebucher_Mountain_Dog';

    /**
     * Eurasier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Eurasier Ontology
     */
    case LIVE_MMLS_DOGS_Eurasier = 'LIVE_MMLS_DOGS_Eurasier';

    /**
     * Field Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Field_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_Field_Spaniel = 'LIVE_MMLS_DOGS_Field_Spaniel';

    /**
     * Fila Brasileiro-Brazilian Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Fila_Brasileiro_Brazilian_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Fila_Brasileiro_Brazilian_Mastiff = 'LIVE_MMLS_DOGS_Fila_Brasileiro_Brazilian_Mastiff';

    /**
     * Finnish Lapphund
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Finnish_Lapphund Ontology
     */
    case LIVE_MMLS_DOGS_Finnish_Lapphund = 'LIVE_MMLS_DOGS_Finnish_Lapphund';

    /**
     * Finnish Spitz
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Finnish_Spitz Ontology
     */
    case LIVE_MMLS_DOGS_Finnish_Spitz = 'LIVE_MMLS_DOGS_Finnish_Spitz';

    /**
     * Flat-Coated Retriever
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Flat_Coated_Retriever Ontology
     */
    case LIVE_MMLS_DOGS_Flat_Coated_Retriever = 'LIVE_MMLS_DOGS_Flat_Coated_Retriever';

    /**
     * French Bulldog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_French_Bulldog Ontology
     */
    case LIVE_MMLS_DOGS_French_Bulldog = 'LIVE_MMLS_DOGS_French_Bulldog';

    /**
     * French Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_French_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_French_Mastiff = 'LIVE_MMLS_DOGS_French_Mastiff';

    /**
     * German Mastiff-Great Dane
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_German_Mastiff_Great_Dane Ontology
     */
    case LIVE_MMLS_DOGS_German_Mastiff_Great_Dane = 'LIVE_MMLS_DOGS_German_Mastiff_Great_Dane';

    /**
     * German Pinscher
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_German_Pinscher Ontology
     */
    case LIVE_MMLS_DOGS_German_Pinscher = 'LIVE_MMLS_DOGS_German_Pinscher';

    /**
     * German Shepherd Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_German_Shepherd_Dog Ontology
     */
    case LIVE_MMLS_DOGS_German_Shepherd_Dog = 'LIVE_MMLS_DOGS_German_Shepherd_Dog';

    /**
     * German Shorthaired Pointer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_German_Shorthaired_Pointer Ontology
     */
    case LIVE_MMLS_DOGS_German_Shorthaired_Pointer = 'LIVE_MMLS_DOGS_German_Shorthaired_Pointer';

    /**
     * German Wirehaired Pointer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_German_Wirehaired_Pointer Ontology
     */
    case LIVE_MMLS_DOGS_German_Wirehaired_Pointer = 'LIVE_MMLS_DOGS_German_Wirehaired_Pointer';

    /**
     * Giant Schnauzer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Giant_Schnauzer Ontology
     */
    case LIVE_MMLS_DOGS_Giant_Schnauzer = 'LIVE_MMLS_DOGS_Giant_Schnauzer';

    /**
     * Glen of Imaal Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Glen_of_Imaal_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Glen_of_Imaal_Terrier = 'LIVE_MMLS_DOGS_Glen_of_Imaal_Terrier';

    /**
     * Goldador-Golden Retriever Labrador Retriever
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Goldador_Golden_Retriever_Labrador_Retriever Ontology
     */
    case LIVE_MMLS_DOGS_Goldador_Golden_Retriever_Labrador_Retriever = 'LIVE_MMLS_DOGS_Goldador_Golden_Retriever_Labrador_Retriever';

    /**
     * Golden Retriever
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Golden_Retriever Ontology
     */
    case LIVE_MMLS_DOGS_Golden_Retriever = 'LIVE_MMLS_DOGS_Golden_Retriever';

    /**
     * Goldendoodle-Golden Retriever Poodle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Goldendoodle_Golden_Retriever_Poodle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Goldendoodle_Golden_Retriever_Poodle_Mix = 'LIVE_MMLS_DOGS_Goldendoodle_Golden_Retriever_Poodle_Mix';

    /**
     * Gordon Setter
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Gordon_Setter Ontology
     */
    case LIVE_MMLS_DOGS_Gordon_Setter = 'LIVE_MMLS_DOGS_Gordon_Setter';

    /**
     * Great Dane
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Great_Dane Ontology
     */
    case LIVE_MMLS_DOGS_Great_Dane = 'LIVE_MMLS_DOGS_Great_Dane';

    /**
     * Great Pyrenees
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Great_Pyrenees Ontology
     */
    case LIVE_MMLS_DOGS_Great_Pyrenees = 'LIVE_MMLS_DOGS_Great_Pyrenees';

    /**
     * Greater Swiss Mountain Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Greater_Swiss_Mountain_Dog Ontology
     */
    case LIVE_MMLS_DOGS_Greater_Swiss_Mountain_Dog = 'LIVE_MMLS_DOGS_Greater_Swiss_Mountain_Dog';

    /**
     * Greyhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Greyhound Ontology
     */
    case LIVE_MMLS_DOGS_Greyhound = 'LIVE_MMLS_DOGS_Greyhound';

    /**
     * Harrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Harrier Ontology
     */
    case LIVE_MMLS_DOGS_Harrier = 'LIVE_MMLS_DOGS_Harrier';

    /**
     * Havanese
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Havanese Ontology
     */
    case LIVE_MMLS_DOGS_Havanese = 'LIVE_MMLS_DOGS_Havanese';

    /**
     * Ibizan Hound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Ibizan_Hound Ontology
     */
    case LIVE_MMLS_DOGS_Ibizan_Hound = 'LIVE_MMLS_DOGS_Ibizan_Hound';

    /**
     * Icelandic Sheepdog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Icelandic_Sheepdog Ontology
     */
    case LIVE_MMLS_DOGS_Icelandic_Sheepdog = 'LIVE_MMLS_DOGS_Icelandic_Sheepdog';

    /**
     * Irish Red and White Setter
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Irish_Red_and_White_Setter Ontology
     */
    case LIVE_MMLS_DOGS_Irish_Red_and_White_Setter = 'LIVE_MMLS_DOGS_Irish_Red_and_White_Setter';

    /**
     * Irish Setter
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Irish_Setter Ontology
     */
    case LIVE_MMLS_DOGS_Irish_Setter = 'LIVE_MMLS_DOGS_Irish_Setter';

    /**
     * Irish Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Irish_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Irish_Terrier = 'LIVE_MMLS_DOGS_Irish_Terrier';

    /**
     * Irish Water Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Irish_Water_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_Irish_Water_Spaniel = 'LIVE_MMLS_DOGS_Irish_Water_Spaniel';

    /**
     * Irish Wolfhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Irish_Wolfhound Ontology
     */
    case LIVE_MMLS_DOGS_Irish_Wolfhound = 'LIVE_MMLS_DOGS_Irish_Wolfhound';

    /**
     * Italian Greyhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Italian_Greyhound Ontology
     */
    case LIVE_MMLS_DOGS_Italian_Greyhound = 'LIVE_MMLS_DOGS_Italian_Greyhound';

    /**
     * Italian Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Italian_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Italian_Mastiff = 'LIVE_MMLS_DOGS_Italian_Mastiff';

    /**
     * Jack Chi-Chihuahua Jack Russell Terrier Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Jack_Chi_Chihuahua_Jack_Russell_Terrier_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Jack_Chi_Chihuahua_Jack_Russell_Terrier_Mix = 'LIVE_MMLS_DOGS_Jack_Chi_Chihuahua_Jack_Russell_Terrier_Mix';

    /**
     * Jack Russell Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Jack_Russell_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Jack_Russell_Terrier = 'LIVE_MMLS_DOGS_Jack_Russell_Terrier';

    /**
     * Japanese Boxer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Japanese_Boxer Ontology
     */
    case LIVE_MMLS_DOGS_Japanese_Boxer = 'LIVE_MMLS_DOGS_Japanese_Boxer';

    /**
     * Japanese Chin
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Japanese_Chin Ontology
     */
    case LIVE_MMLS_DOGS_Japanese_Chin = 'LIVE_MMLS_DOGS_Japanese_Chin';

    /**
     * Japanese Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Japanese_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Japanese_Mastiff = 'LIVE_MMLS_DOGS_Japanese_Mastiff';

    /**
     * Japanese Pug
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Japanese_Pug Ontology
     */
    case LIVE_MMLS_DOGS_Japanese_Pug = 'LIVE_MMLS_DOGS_Japanese_Pug';

    /**
     * Japanese Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Japanese_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_Japanese_Spaniel = 'LIVE_MMLS_DOGS_Japanese_Spaniel';

    /**
     * Kangal Shepherd Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Kangal_Shepherd_Dog Ontology
     */
    case LIVE_MMLS_DOGS_Kangal_Shepherd_Dog = 'LIVE_MMLS_DOGS_Kangal_Shepherd_Dog';

    /**
     * Keeshond
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Keeshond Ontology
     */
    case LIVE_MMLS_DOGS_Keeshond = 'LIVE_MMLS_DOGS_Keeshond';

    /**
     * Kerry Blue Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Kerry_Blue_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Kerry_Blue_Terrier = 'LIVE_MMLS_DOGS_Kerry_Blue_Terrier';

    /**
     * King Charles Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_King_Charles_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_King_Charles_Spaniel = 'LIVE_MMLS_DOGS_King_Charles_Spaniel';

    /**
     * Komondor
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Komondor Ontology
     */
    case LIVE_MMLS_DOGS_Komondor = 'LIVE_MMLS_DOGS_Komondor';

    /**
     * Kuvasz
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Kuvasz Ontology
     */
    case LIVE_MMLS_DOGS_Kuvasz = 'LIVE_MMLS_DOGS_Kuvasz';

    /**
     * Kyi-Leo-Maltese Lhasa Apso Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Kyi_Leo_Maltese_Lhasa_Apso_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Kyi_Leo_Maltese_Lhasa_Apso_Mix = 'LIVE_MMLS_DOGS_Kyi_Leo_Maltese_Lhasa_Apso_Mix';

    /**
     * Labrabull-Labrador Retriever American Pit Bull
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Labrabull_Labrador_Retriever_American_Pit_Bull Ontology
     */
    case LIVE_MMLS_DOGS_Labrabull_Labrador_Retriever_American_Pit_Bull = 'LIVE_MMLS_DOGS_Labrabull_Labrador_Retriever_American_Pit_Bull';

    /**
     * Labradane-Labrador Retriever Great Dane Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Labradane_Labrador_Retriever_Great_Dane_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Labradane_Labrador_Retriever_Great_Dane_Mix = 'LIVE_MMLS_DOGS_Labradane_Labrador_Retriever_Great_Dane_Mix';

    /**
     * Labradoodle Labrador Retriever Poodle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Labradoodle_Labrador_Retriever_Poodle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Labradoodle_Labrador_Retriever_Poodle_Mix = 'LIVE_MMLS_DOGS_Labradoodle_Labrador_Retriever_Poodle_Mix';

    /**
     * Labrador Retriever
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Labrador_Retriever Ontology
     */
    case LIVE_MMLS_DOGS_Labrador_Retriever = 'LIVE_MMLS_DOGS_Labrador_Retriever';

    /**
     * Lagotto Romagnolo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Lagotto_Romagnolo Ontology
     */
    case LIVE_MMLS_DOGS_Lagotto_Romagnolo = 'LIVE_MMLS_DOGS_Lagotto_Romagnolo';

    /**
     * Lakeland Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Lakeland_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Lakeland_Terrier = 'LIVE_MMLS_DOGS_Lakeland_Terrier';

    /**
     * Leonberger
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Leonberger Ontology
     */
    case LIVE_MMLS_DOGS_Leonberger = 'LIVE_MMLS_DOGS_Leonberger';

    /**
     * Lhasa Apso
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Lhasa_Apso Ontology
     */
    case LIVE_MMLS_DOGS_Lhasa_Apso = 'LIVE_MMLS_DOGS_Lhasa_Apso';

    /**
     * Löwchen
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Löwchen Ontology
     */
    case LIVE_MMLS_DOGS_Lowchen = 'LIVE_MMLS_DOGS_Löwchen';

    /**
     * Mal-Shi-Maltese Shih Tzu Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Mal_Shi_Maltese_Shih_Tzu_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Mal_Shi_Maltese_Shih_Tzu_Mix = 'LIVE_MMLS_DOGS_Mal_Shi_Maltese_Shih_Tzu_Mix';

    /**
     * Malt-Tzu-Maltese Shih Tzu Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Malt_Tzu_Maltese_Shih_Tzu_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Malt_Tzu_Maltese_Shih_Tzu_Mix = 'LIVE_MMLS_DOGS_Malt_Tzu_Maltese_Shih_Tzu_Mix';

    /**
     * Maltese
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Maltese Ontology
     */
    case LIVE_MMLS_DOGS_Maltese = 'LIVE_MMLS_DOGS_Maltese';

    /**
     * Maltese Shih Tzu
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Maltese_Shih_Tzu Ontology
     */
    case LIVE_MMLS_DOGS_Maltese_Shih_Tzu = 'LIVE_MMLS_DOGS_Maltese_Shih_Tzu';

    /**
     * Malti Zu-Maltese Shih Tzu Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Malti_Zu_Maltese_Shih_Tzu_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Malti_Zu_Maltese_Shih_Tzu_Mix = 'LIVE_MMLS_DOGS_Malti_Zu_Maltese_Shih_Tzu_Mix';

    /**
     * Maltipoo-Maltese Poodle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Maltipoo_Maltese_Poodle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Maltipoo_Maltese_Poodle_Mix = 'LIVE_MMLS_DOGS_Maltipoo_Maltese_Poodle_Mix';

    /**
     * Manchester Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Manchester_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Manchester_Terrier = 'LIVE_MMLS_DOGS_Manchester_Terrier';

    /**
     * Mastador-Bullmastiff Labrador Retriever Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Mastador_Bullmastiff_Labrador_Retriever_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Mastador_Bullmastiff_Labrador_Retriever_Mix = 'LIVE_MMLS_DOGS_Mastador_Bullmastiff_Labrador_Retriever_Mix';

    /**
     * Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Mastiff = 'LIVE_MMLS_DOGS_Mastiff';

    /**
     * Mastin Espanol-Spanish Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Mastin_Espanol_Spanish_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Mastin_Espanol_Spanish_Mastiff = 'LIVE_MMLS_DOGS_Mastin_Espanol_Spanish_Mastiff';

    /**
     * Mastino Napoletano-Neopolitan Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Mastino_Napoletano_Neopolitan_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Mastino_Napoletano_Neopolitan_Mastiff = 'LIVE_MMLS_DOGS_Mastino_Napoletano_Neopolitan_Mastiff';

    /**
     * Miniature American Shepherd
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Miniature_American_Shepherd Ontology
     */
    case LIVE_MMLS_DOGS_Miniature_American_Shepherd = 'LIVE_MMLS_DOGS_Miniature_American_Shepherd';

    /**
     * Miniature Bull Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Miniature_Bull_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Miniature_Bull_Terrier = 'LIVE_MMLS_DOGS_Miniature_Bull_Terrier';

    /**
     * Miniature Pinscher
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Miniature_Pinscher Ontology
     */
    case LIVE_MMLS_DOGS_Miniature_Pinscher = 'LIVE_MMLS_DOGS_Miniature_Pinscher';

    /**
     * Miniature Schnauzer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Miniature_Schnauzer Ontology
     */
    case LIVE_MMLS_DOGS_Miniature_Schnauzer = 'LIVE_MMLS_DOGS_Miniature_Schnauzer';

    /**
     * Mixed-Invalid Breed Type
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Mixed_Invalid_Breed_Type Ontology
     */
    case LIVE_MMLS_DOGS_Mixed_Invalid_Breed_Type = 'LIVE_MMLS_DOGS_Mixed_Invalid_Breed_Type';

    /**
     * Neapolitan Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Neapolitan_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Neapolitan_Mastiff = 'LIVE_MMLS_DOGS_Neapolitan_Mastiff';

    /**
     * Newfoundland
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Newfoundland Ontology
     */
    case LIVE_MMLS_DOGS_Newfoundland = 'LIVE_MMLS_DOGS_Newfoundland';

    /**
     * Norfolk Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Norfolk_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Norfolk_Terrier = 'LIVE_MMLS_DOGS_Norfolk_Terrier';

    /**
     * Norwegian Buhund
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Norwegian_Buhund Ontology
     */
    case LIVE_MMLS_DOGS_Norwegian_Buhund = 'LIVE_MMLS_DOGS_Norwegian_Buhund';

    /**
     * Norwegian Elkhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Norwegian_Elkhound Ontology
     */
    case LIVE_MMLS_DOGS_Norwegian_Elkhound = 'LIVE_MMLS_DOGS_Norwegian_Elkhound';

    /**
     * Norwegian Lundehund
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Norwegian_Lundehund Ontology
     */
    case LIVE_MMLS_DOGS_Norwegian_Lundehund = 'LIVE_MMLS_DOGS_Norwegian_Lundehund';

    /**
     * Norwich Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Norwich_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Norwich_Terrier = 'LIVE_MMLS_DOGS_Norwich_Terrier';

    /**
     * Nova Scotia Duck-Tolling Retriever
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Nova_Scotia_Duck_Tolling_Retriever Ontology
     */
    case LIVE_MMLS_DOGS_Nova_Scotia_Duck_Tolling_Retriever = 'LIVE_MMLS_DOGS_Nova_Scotia_Duck_Tolling_Retriever';

    /**
     * Old English Bulldog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Old_English_Bulldog Ontology
     */
    case LIVE_MMLS_DOGS_Old_English_Bulldog = 'LIVE_MMLS_DOGS_Old_English_Bulldog';

    /**
     * Old English Sheepdog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Old_English_Sheepdog Ontology
     */
    case LIVE_MMLS_DOGS_Old_English_Sheepdog = 'LIVE_MMLS_DOGS_Old_English_Sheepdog';

    /**
     * Olde English Bulldog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Olde_English_Bulldog Ontology
     */
    case LIVE_MMLS_DOGS_Olde_English_Bulldog = 'LIVE_MMLS_DOGS_Olde_English_Bulldog';

    /**
     * Otterhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Otterhound Ontology
     */
    case LIVE_MMLS_DOGS_Otterhound = 'LIVE_MMLS_DOGS_Otterhound';

    /**
     * Papillon
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Papillon Ontology
     */
    case LIVE_MMLS_DOGS_Papillon = 'LIVE_MMLS_DOGS_Papillon';

    /**
     * Parson Russell Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Parson_Russell_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Parson_Russell_Terrier = 'LIVE_MMLS_DOGS_Parson_Russell_Terrier';

    /**
     * Peekapoo-Pekingese Poodle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Peekapoo_Pekingese_Poodle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Peekapoo_Pekingese_Poodle_Mix = 'LIVE_MMLS_DOGS_Peekapoo_Pekingese_Poodle_Mix';

    /**
     * Pekingese
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pekingese Ontology
     */
    case LIVE_MMLS_DOGS_Pekingese = 'LIVE_MMLS_DOGS_Pekingese';

    /**
     * Pembroke Welsh Corgi
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pembroke_Welsh_Corgi Ontology
     */
    case LIVE_MMLS_DOGS_Pembroke_Welsh_Corgi = 'LIVE_MMLS_DOGS_Pembroke_Welsh_Corgi';

    /**
     * Petit Basset Griffon Vendéen
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Petit_Basset_Griffon_Vendéen Ontology
     */
    case LIVE_MMLS_DOGS_Petit_Basset_Griffon_Vendeen = 'LIVE_MMLS_DOGS_Petit_Basset_Griffon_Vendéen';

    /**
     * Pharaoh Hound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pharaoh_Hound Ontology
     */
    case LIVE_MMLS_DOGS_Pharaoh_Hound = 'LIVE_MMLS_DOGS_Pharaoh_Hound';

    /**
     * Pit Bull
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pit_Bull Ontology
     */
    case LIVE_MMLS_DOGS_Pit_Bull = 'LIVE_MMLS_DOGS_Pit_Bull';

    /**
     * Pit Plott-Pitbull Plott Hound Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pit_Plott_Pitbull_Plott_Hound_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Pit_Plott_Pitbull_Plott_Hound_Mix = 'LIVE_MMLS_DOGS_Pit_Plott_Pitbull_Plott_Hound_Mix';

    /**
     * Plott Hound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Plott_Hound Ontology
     */
    case LIVE_MMLS_DOGS_Plott_Hound = 'LIVE_MMLS_DOGS_Plott_Hound';

    /**
     * Pointer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pointer Ontology
     */
    case LIVE_MMLS_DOGS_Pointer = 'LIVE_MMLS_DOGS_Pointer';

    /**
     * Polish Lowland Sheepdog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Polish_Lowland_Sheepdog Ontology
     */
    case LIVE_MMLS_DOGS_Polish_Lowland_Sheepdog = 'LIVE_MMLS_DOGS_Polish_Lowland_Sheepdog';

    /**
     * Pomapoo-Pomeranian Poodle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pomapoo_Pomeranian_Poodle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Pomapoo_Pomeranian_Poodle_Mix = 'LIVE_MMLS_DOGS_Pomapoo_Pomeranian_Poodle_Mix';

    /**
     * Pomchi-Pomeranian Chihuahua Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pomchi_Pomeranian_Chihuahua_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Pomchi_Pomeranian_Chihuahua_Mix = 'LIVE_MMLS_DOGS_Pomchi_Pomeranian_Chihuahua_Mix';

    /**
     * Pomeranian
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pomeranian Ontology
     */
    case LIVE_MMLS_DOGS_Pomeranian = 'LIVE_MMLS_DOGS_Pomeranian';

    /**
     * Pomsky-Pomeranian Siberian Husky Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pomsky_Pomeranian_Siberian_Husky_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Pomsky_Pomeranian_Siberian_Husky_Mix = 'LIVE_MMLS_DOGS_Pomsky_Pomeranian_Siberian_Husky_Mix';

    /**
     * Poochon-Poodle Bichon Frise Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Poochon_Poodle_Bichon_Frise_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Poochon_Poodle_Bichon_Frise_Mix = 'LIVE_MMLS_DOGS_Poochon_Poodle_Bichon_Frise_Mix';

    /**
     * Poodle
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Poodle Ontology
     */
    case LIVE_MMLS_DOGS_Poodle = 'LIVE_MMLS_DOGS_Poodle';

    /**
     * Portuguese Podengo Pequeno
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Portuguese_Podengo_Pequeno Ontology
     */
    case LIVE_MMLS_DOGS_Portuguese_Podengo_Pequeno = 'LIVE_MMLS_DOGS_Portuguese_Podengo_Pequeno';

    /**
     * Portuguese Water Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Portuguese_Water_Dog Ontology
     */
    case LIVE_MMLS_DOGS_Portuguese_Water_Dog = 'LIVE_MMLS_DOGS_Portuguese_Water_Dog';

    /**
     * Presa Canario
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Presa_Canario Ontology
     */
    case LIVE_MMLS_DOGS_Presa_Canario = 'LIVE_MMLS_DOGS_Presa_Canario';

    /**
     * Pug
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pug Ontology
     */
    case LIVE_MMLS_DOGS_Pug = 'LIVE_MMLS_DOGS_Pug';

    /**
     * Pugapoo-Pug Poodle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pugapoo_Pug_Poodle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Pugapoo_Pug_Poodle_Mix = 'LIVE_MMLS_DOGS_Pugapoo_Pug_Poodle_Mix';

    /**
     * Puggle-Pug Beagle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Puggle_Pug_Beagle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Puggle_Pug_Beagle_Mix = 'LIVE_MMLS_DOGS_Puggle_Pug_Beagle_Mix';

    /**
     * Puli
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Puli Ontology
     */
    case LIVE_MMLS_DOGS_Puli = 'LIVE_MMLS_DOGS_Puli';

    /**
     * Pyrenean Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pyrenean_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Pyrenean_Mastiff = 'LIVE_MMLS_DOGS_Pyrenean_Mastiff';

    /**
     * Pyrenean Shepherd
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Pyrenean_Shepherd Ontology
     */
    case LIVE_MMLS_DOGS_Pyrenean_Shepherd = 'LIVE_MMLS_DOGS_Pyrenean_Shepherd';

    /**
     * Rat Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Rat_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Rat_Terrier = 'LIVE_MMLS_DOGS_Rat_Terrier';

    /**
     * Redbone Coonhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Redbone_Coonhound Ontology
     */
    case LIVE_MMLS_DOGS_Redbone_Coonhound = 'LIVE_MMLS_DOGS_Redbone_Coonhound';

    /**
     * Rhodesian Ridgeback
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Rhodesian_Ridgeback Ontology
     */
    case LIVE_MMLS_DOGS_Rhodesian_Ridgeback = 'LIVE_MMLS_DOGS_Rhodesian_Ridgeback';

    /**
     * Rottweiler
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Rottweiler Ontology
     */
    case LIVE_MMLS_DOGS_Rottweiler = 'LIVE_MMLS_DOGS_Rottweiler';

    /**
     * Russell Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Russell_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Russell_Terrier = 'LIVE_MMLS_DOGS_Russell_Terrier';

    /**
     * Saint Bernard
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Saint_Bernard Ontology
     */
    case LIVE_MMLS_DOGS_Saint_Bernard = 'LIVE_MMLS_DOGS_Saint_Bernard';

    /**
     * Saluki
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Saluki Ontology
     */
    case LIVE_MMLS_DOGS_Saluki = 'LIVE_MMLS_DOGS_Saluki';

    /**
     * Samoyed
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Samoyed Ontology
     */
    case LIVE_MMLS_DOGS_Samoyed = 'LIVE_MMLS_DOGS_Samoyed';

    /**
     * Schipperke
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Schipperke Ontology
     */
    case LIVE_MMLS_DOGS_Schipperke = 'LIVE_MMLS_DOGS_Schipperke';

    /**
     * Schnoodle-Schnauzer Poodle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Schnoodle_Schnauzer_Poodle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Schnoodle_Schnauzer_Poodle_Mix = 'LIVE_MMLS_DOGS_Schnoodle_Schnauzer_Poodle_Mix';

    /**
     * Scottish Deerhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Scottish_Deerhound Ontology
     */
    case LIVE_MMLS_DOGS_Scottish_Deerhound = 'LIVE_MMLS_DOGS_Scottish_Deerhound';

    /**
     * Scottish Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Scottish_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Scottish_Terrier = 'LIVE_MMLS_DOGS_Scottish_Terrier';

    /**
     * Sealyham Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Sealyham_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Sealyham_Terrier = 'LIVE_MMLS_DOGS_Sealyham_Terrier';

    /**
     * Shar Pei
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Shar_Pei Ontology
     */
    case LIVE_MMLS_DOGS_Shar_Pei = 'LIVE_MMLS_DOGS_Shar_Pei';

    /**
     * Sheepadoodle-Old English Sheepdog Poodle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Sheepadoodle_Old_English_Sheepdog_Poodle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Sheepadoodle_Old_English_Sheepdog_Poodle_Mix = 'LIVE_MMLS_DOGS_Sheepadoodle_Old_English_Sheepdog_Poodle_Mix';

    /**
     * Shetland Sheepdog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Shetland_Sheepdog Ontology
     */
    case LIVE_MMLS_DOGS_Shetland_Sheepdog = 'LIVE_MMLS_DOGS_Shetland_Sheepdog';

    /**
     * Shiba Inu
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Shiba_Inu Ontology
     */
    case LIVE_MMLS_DOGS_Shiba_Inu = 'LIVE_MMLS_DOGS_Shiba_Inu';

    /**
     * Shih-Poo
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Shih_Poo Ontology
     */
    case LIVE_MMLS_DOGS_Shih_Poo = 'LIVE_MMLS_DOGS_Shih_Poo';

    /**
     * Shih Tzu
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Shih_Tzu Ontology
     */
    case LIVE_MMLS_DOGS_Shih_Tzu = 'LIVE_MMLS_DOGS_Shih_Tzu';

    /**
     * Shihpoo-Shih Tzu Poodle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Shihpoo_Shih_Tzu_Poodle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Shihpoo_Shih_Tzu_Poodle_Mix = 'LIVE_MMLS_DOGS_Shihpoo_Shih_Tzu_Poodle_Mix';

    /**
     * Siberian Husky
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Siberian_Husky Ontology
     */
    case LIVE_MMLS_DOGS_Siberian_Husky = 'LIVE_MMLS_DOGS_Siberian_Husky';

    /**
     * Silky Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Silky_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Silky_Terrier = 'LIVE_MMLS_DOGS_Silky_Terrier';

    /**
     * Skye Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Skye_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Skye_Terrier = 'LIVE_MMLS_DOGS_Skye_Terrier';

    /**
     * Sloughi-Arabian Greyhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Sloughi_Arabian_Greyhound Ontology
     */
    case LIVE_MMLS_DOGS_Sloughi_Arabian_Greyhound = 'LIVE_MMLS_DOGS_Sloughi_Arabian_Greyhound';

    /**
     * Smooth Fox Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Smooth_Fox_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Smooth_Fox_Terrier = 'LIVE_MMLS_DOGS_Smooth_Fox_Terrier';

    /**
     * Soft-Coated Wheaten Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Soft_Coated_Wheaten_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Soft_Coated_Wheaten_Terrier = 'LIVE_MMLS_DOGS_Soft_Coated_Wheaten_Terrier';

    /**
     * South African Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_South_African_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_South_African_Mastiff = 'LIVE_MMLS_DOGS_South_African_Mastiff';

    /**
     * Spanish Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Spanish_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Spanish_Mastiff = 'LIVE_MMLS_DOGS_Spanish_Mastiff';

    /**
     * Spanish Water Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Spanish_Water_Dog Ontology
     */
    case LIVE_MMLS_DOGS_Spanish_Water_Dog = 'LIVE_MMLS_DOGS_Spanish_Water_Dog';

    /**
     * Spinone Italiano
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Spinone_Italiano Ontology
     */
    case LIVE_MMLS_DOGS_Spinone_Italiano = 'LIVE_MMLS_DOGS_Spinone_Italiano';

    /**
     * Staffordshire Bull Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Staffordshire_Bull_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Staffordshire_Bull_Terrier = 'LIVE_MMLS_DOGS_Staffordshire_Bull_Terrier';

    /**
     * Standard Schnauzer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Standard_Schnauzer Ontology
     */
    case LIVE_MMLS_DOGS_Standard_Schnauzer = 'LIVE_MMLS_DOGS_Standard_Schnauzer';

    /**
     * Sussex Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Sussex_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_Sussex_Spaniel = 'LIVE_MMLS_DOGS_Sussex_Spaniel';

    /**
     * Swedish Vallhund
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Swedish_Vallhund Ontology
     */
    case LIVE_MMLS_DOGS_Swedish_Vallhund = 'LIVE_MMLS_DOGS_Swedish_Vallhund';

    /**
     * Tibetan Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Tibetan_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Tibetan_Mastiff = 'LIVE_MMLS_DOGS_Tibetan_Mastiff';

    /**
     * Tibetan Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Tibetan_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_Tibetan_Spaniel = 'LIVE_MMLS_DOGS_Tibetan_Spaniel';

    /**
     * Tibetan Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Tibetan_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Tibetan_Terrier = 'LIVE_MMLS_DOGS_Tibetan_Terrier';

    /**
     * Tosa-Japanese Mastiff
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Tosa_Japanese_Mastiff Ontology
     */
    case LIVE_MMLS_DOGS_Tosa_Japanese_Mastiff = 'LIVE_MMLS_DOGS_Tosa_Japanese_Mastiff';

    /**
     * Toy Fox Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Toy_Fox_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Toy_Fox_Terrier = 'LIVE_MMLS_DOGS_Toy_Fox_Terrier';

    /**
     * Treeing Walker Coonhound
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Treeing_Walker_Coonhound Ontology
     */
    case LIVE_MMLS_DOGS_Treeing_Walker_Coonhound = 'LIVE_MMLS_DOGS_Treeing_Walker_Coonhound';

    /**
     * Utonagan-Northern Inuit Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Utonagan_Northern_Inuit_Dog Ontology
     */
    case LIVE_MMLS_DOGS_Utonagan_Northern_Inuit_Dog = 'LIVE_MMLS_DOGS_Utonagan_Northern_Inuit_Dog';

    /**
     * Valley Bulldog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Valley_Bulldog Ontology
     */
    case LIVE_MMLS_DOGS_Valley_Bulldog = 'LIVE_MMLS_DOGS_Valley_Bulldog';

    /**
     * Vizsla
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Vizsla Ontology
     */
    case LIVE_MMLS_DOGS_Vizsla = 'LIVE_MMLS_DOGS_Vizsla';

    /**
     * Weimaraner
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Weimaraner Ontology
     */
    case LIVE_MMLS_DOGS_Weimaraner = 'LIVE_MMLS_DOGS_Weimaraner';

    /**
     * Welsh Springer Spaniel
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Welsh_Springer_Spaniel Ontology
     */
    case LIVE_MMLS_DOGS_Welsh_Springer_Spaniel = 'LIVE_MMLS_DOGS_Welsh_Springer_Spaniel';

    /**
     * Welsh Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Welsh_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Welsh_Terrier = 'LIVE_MMLS_DOGS_Welsh_Terrier';

    /**
     * West Highland White Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_West_Highland_White_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_West_Highland_White_Terrier = 'LIVE_MMLS_DOGS_West_Highland_White_Terrier';

    /**
     * Whippet
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Whippet Ontology
     */
    case LIVE_MMLS_DOGS_Whippet = 'LIVE_MMLS_DOGS_Whippet';

    /**
     * Wire Fox Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Wire_Fox_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Wire_Fox_Terrier = 'LIVE_MMLS_DOGS_Wire_Fox_Terrier';

    /**
     * Wirehaired Pointing Griffon
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Wirehaired_Pointing_Griffon Ontology
     */
    case LIVE_MMLS_DOGS_Wirehaired_Pointing_Griffon = 'LIVE_MMLS_DOGS_Wirehaired_Pointing_Griffon';

    /**
     * Wirehaired Vizsla
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Wirehaired_Vizsla Ontology
     */
    case LIVE_MMLS_DOGS_Wirehaired_Vizsla = 'LIVE_MMLS_DOGS_Wirehaired_Vizsla';

    /**
     * Xoloitzcuintli-Mexican Hairless Dog
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Xoloitzcuintli_Mexican_Hairless_Dog Ontology
     */
    case LIVE_MMLS_DOGS_Xoloitzcuintli_Mexican_Hairless_Dog = 'LIVE_MMLS_DOGS_Xoloitzcuintli_Mexican_Hairless_Dog';

    /**
     * Yorkipoo-Yorkshire Terrier Poodle Mix
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Yorkipoo_Yorkshire_Terrier_Poodle_Mix Ontology
     */
    case LIVE_MMLS_DOGS_Yorkipoo_Yorkshire_Terrier_Poodle_Mix = 'LIVE_MMLS_DOGS_Yorkipoo_Yorkshire_Terrier_Poodle_Mix';

    /**
     * Yorkshire Terrier
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_DOGS_Yorkshire_Terrier Ontology
     */
    case LIVE_MMLS_DOGS_Yorkshire_Terrier = 'LIVE_MMLS_DOGS_Yorkshire_Terrier';

    /**
     * Ferrets
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_FERR Ontology
     */
    case LIVE_MMLS_FERR = 'LIVE_MMLS_FERR';

    /**
     * Goats
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_GOAT Ontology
     */
    case LIVE_MMLS_GOAT = 'LIVE_MMLS_GOAT';

    /**
     * Horses
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_HORS Ontology
     */
    case LIVE_MMLS_HORS = 'LIVE_MMLS_HORS';

    /**
     * Monkeys
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_MNKY Ontology
     */
    case LIVE_MMLS_MNKY = 'LIVE_MMLS_MNKY';

    /**
     * Pigs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_PIGS Ontology
     */
    case LIVE_MMLS_PIGS = 'LIVE_MMLS_PIGS';

    /**
     * Rodents
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_RDNT Ontology
     */
    case LIVE_MMLS_RDNT = 'LIVE_MMLS_RDNT';

    /**
     * Sheep
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_MMLS_SHEP Ontology
     */
    case LIVE_MMLS_SHEP = 'LIVE_MMLS_SHEP';

    /**
     * Reptiles
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_REPT Ontology
     */
    case LIVE_REPT = 'LIVE_REPT';

    /**
     * Venomous animals
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_VANI Ontology
     */
    case LIVE_VANI = 'LIVE_VANI';

    /**
     * Zoo animals
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_LIVE_ZOOA Ontology
     */
    case LIVE_ZOOA = 'LIVE_ZOOA';

    /**
     * Mail
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MAIL Ontology
     */
    case MAIL = 'MAIL';

    /**
     * Musical Instruments & Art
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MART Ontology
     */
    case MART = 'MART';

    /**
     * Art
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MART_ART Ontology
     */
    case MART_ART = 'MART_ART';

    /**
     * Engraving
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MART_ENGR Ontology
     */
    case MART_ENGR = 'MART_ENGR';

    /**
     * Handicraft products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MART_HAND Ontology
     */
    case MART_HAND = 'MART_HAND';

    /**
     * Musical equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MART_MUEQ Ontology
     */
    case MART_MUEQ = 'MART_MUEQ';

    /**
     * Musical instruments
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MART_MUSI Ontology
     */
    case MART_MUSI = 'MART_MUSI';

    /**
     * Painting
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MART_PNTG Ontology
     */
    case MART_PNTG = 'MART_PNTG';

    /**
     * Military, Weapons and Ammunition
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MLTY Ontology
     */
    case MLTY = 'MLTY';

    /**
     * Munitions
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MLTY_AMUN Ontology
     */
    case MLTY_AMUN = 'MLTY_AMUN';

    /**
     * Military supplies
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MLTY_MSUP Ontology
     */
    case MLTY_MSUP = 'MLTY_MSUP';

    /**
     * Sporting weapons
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MLTY_SPWE Ontology
     */
    case MLTY_SPWE = 'MLTY_SPWE';

    /**
     * Weapons
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_MLTY_WPNS Ontology
     */
    case MLTY_WPNS = 'MLTY_WPNS';

    /**
     * Pharmaceutical, Medical And Biological
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR Ontology
     */
    case PHAR = 'PHAR';

    /**
     * Biological products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_BIOP Ontology
     */
    case PHAR_BIOP = 'PHAR_BIOP';

    /**
     * Biochemicals
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_BIOP_BIOC Ontology
     */
    case PHAR_BIOP_BIOC = 'PHAR_BIOP_BIOC';

    /**
     * Hemoderivatives
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_BIOP_HEMO Ontology
     */
    case PHAR_BIOP_HEMO = 'PHAR_BIOP_HEMO';

    /**
     * Human blood
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_BIOP_HUBL Ontology
     */
    case PHAR_BIOP_HUBL = 'PHAR_BIOP_HUBL';

    /**
     * Human serum
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_BIOP_HUSR Ontology
     */
    case PHAR_BIOP_HUSR = 'PHAR_BIOP_HUSR';

    /**
     * Live human organs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_BIOP_LHOR Ontology
     */
    case PHAR_BIOP_LHOR = 'PHAR_BIOP_LHOR';

    /**
     * Semen
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_BIOP_SEME Ontology
     */
    case PHAR_BIOP_SEME = 'PHAR_BIOP_SEME';

    /**
     * Samples
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_BIOP_SMPL Ontology
     */
    case PHAR_BIOP_SMPL = 'PHAR_BIOP_SMPL';

    /**
     * Medicines
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_MDCN Ontology
     */
    case PHAR_MDCN = 'PHAR_MDCN';

    /**
     * Antibiotics and Vitamins
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_MDCN_ANTB Ontology
     */
    case PHAR_MDCN_ANTB = 'PHAR_MDCN_ANTB';

    /**
     * Vaccines
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_MDCN_VACC Ontology
     */
    case PHAR_MDCN_VACC = 'PHAR_MDCN_VACC';

    /**
     * Vetenary products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_MDCN_VETE Ontology
     */
    case PHAR_MDCN_VETE = 'PHAR_MDCN_VETE';

    /**
     * Medical
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_MEDI Ontology
     */
    case PHAR_MEDI = 'PHAR_MEDI';

    /**
     * Pharmaceutical products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_PHAR Ontology
     */
    case PHAR_PHAR = 'PHAR_PHAR';

    /**
     * Surgical equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PHAR_PHAR_SUEQ Ontology
     */
    case PHAR_PHAR_SUEQ = 'PHAR_PHAR_SUEQ';

    /**
     * Printed Matter
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PRIN Ontology
     */
    case PRIN = 'PRIN';

    /**
     * Advertising materials
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PRIN_ADVM Ontology
     */
    case PRIN_ADVM = 'PRIN_ADVM';

    /**
     * Books
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PRIN_BOOK Ontology
     */
    case PRIN_BOOK = 'PRIN_BOOK';

    /**
     * Documents and Tickets
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PRIN_DOCU Ontology
     */
    case PRIN_DOCU = 'PRIN_DOCU';

    /**
     * Educational materials
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PRIN_EDUM Ontology
     */
    case PRIN_EDUM = 'PRIN_EDUM';

    /**
     * Newspapers and Magazines
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PRIN_NEWS Ontology
     */
    case PRIN_NEWS = 'PRIN_NEWS';

    /**
     * Paper products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_PRIN_PPRP Ontology
     */
    case PRIN_PPRP = 'PRIN_PPRP';

    /**
     * Raw materials (Construction, Metals, Wood, Minerals, Plastic)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM Ontology
     */
    case RAWM = 'RAWM';

    /**
     * Building material
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_BLDM Ontology
     */
    case RAWM_BLDM = 'RAWM_BLDM';

    /**
     * Clay products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_CLAY Ontology
     */
    case RAWM_CLAY = 'RAWM_CLAY';

    /**
     * Glass products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_GLAS Ontology
     */
    case RAWM_GLAS = 'RAWM_GLAS';

    /**
     * Granite slabs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_GRAN Ontology
     */
    case RAWM_GRAN = 'RAWM_GRAN';

    /**
     * Gums-Resines
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_GUMS Ontology
     */
    case RAWM_GUMS = 'RAWM_GUMS';

    /**
     * Marble
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_MARB Ontology
     */
    case RAWM_MARB = 'RAWM_MARB';

    /**
     * Metals
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_METL Ontology
     */
    case RAWM_METL = 'RAWM_METL';

    /**
     * Metal products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_METP Ontology
     */
    case RAWM_METP = 'RAWM_METP';

    /**
     * Mica products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_MICA Ontology
     */
    case RAWM_MICA = 'RAWM_MICA';

    /**
     * Minerals
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_MINE Ontology
     */
    case RAWM_MINE = 'RAWM_MINE';

    /**
     * Mirre
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_MIRR Ontology
     */
    case RAWM_MIRR = 'RAWM_MIRR';

    /**
     * Oils
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_OILS Ontology
     */
    case RAWM_OILS = 'RAWM_OILS';

    /**
     * Plastic products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_PLST Ontology
     */
    case RAWM_PLST = 'RAWM_PLST';

    /**
     * Quartz
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_QRTZ Ontology
     */
    case RAWM_QRTZ = 'RAWM_QRTZ';

    /**
     * Rubber products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_RUBR Ontology
     */
    case RAWM_RUBR = 'RAWM_RUBR';

    /**
     * Rubber tyres
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_RUBR_RTYR Ontology
     */
    case RAWM_RUBR_RTYR = 'RAWM_RUBR_RTYR';

    /**
     * Stones
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_STNS Ontology
     */
    case RAWM_STNS = 'RAWM_STNS';

    /**
     * Wood products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_RAWM_WOOD Ontology
     */
    case RAWM_WOOD = 'RAWM_WOOD';

    /**
     * Scientific Instruments
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_SCIN Ontology
     */
    case SCIN = 'SCIN';

    /**
     * Densist equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_SCIN_DEEQ Ontology
     */
    case SCIN_DEEQ = 'SCIN_DEEQ';

    /**
     * Diagnostics equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_SCIN_DIAG Ontology
     */
    case SCIN_DIAG = 'SCIN_DIAG';

    /**
     * Hearing aids
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_SCIN_HEAR Ontology
     */
    case SCIN_HEAR = 'SCIN_HEAR';

    /**
     * Laboratory equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_SCIN_LBEQ Ontology
     */
    case SCIN_LBEQ = 'SCIN_LBEQ';

    /**
     * Medical equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_SCIN_MEEQ Ontology
     */
    case SCIN_MEEQ = 'SCIN_MEEQ';

    /**
     * Optical instruments
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_SCIN_OPTI Ontology
     */
    case SCIN_OPTI = 'SCIN_OPTI';

    /**
     * Precision instruments
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_SCIN_PRCI Ontology
     */
    case SCIN_PRCI = 'SCIN_PRCI';

    /**
     * Trophies
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TRPH Ontology
     */
    case TRPH = 'TRPH';

    /**
     * Hunting Trophies
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TRPH_HTRH Ontology
     */
    case TRPH_HTRH = 'TRPH_HTRH';

    /**
     * Trophies (not hunting)
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TRPH_OTRH Ontology
     */
    case TRPH_OTRH = 'TRPH_OTRH';

    /**
     * Textiles, Leather and Furs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL Ontology
     */
    case TXTL = 'TXTL';

    /**
     * Furs excluding Wear
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_FREW Ontology
     */
    case TXTL_FREW = 'TXTL_FREW';

    /**
     * Fur
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_FUR Ontology
     */
    case TXTL_FUR = 'TXTL_FUR';

    /**
     * Furs wear
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_FURW Ontology
     */
    case TXTL_FURW = 'TXTL_FURW';

    /**
     * Leather excluding Wear
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_LEXW Ontology
     */
    case TXTL_LEXW = 'TXTL_LEXW';

    /**
     * Leather
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_LTHR Ontology
     */
    case TXTL_LTHR = 'TXTL_LTHR';

    /**
     * Leather wear
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_LTWR Ontology
     */
    case TXTL_LTWR = 'TXTL_LTWR';

    /**
     * Textiles excluding Wear
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXEW Ontology
     */
    case TXTL_TXEW = 'TXTL_TXEW';

    /**
     * Carpets and Rugs
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXEW_CARP Ontology
     */
    case TXTL_TXEW_CARP = 'TXTL_TXEW_CARP';

    /**
     * Curtains and Drapery
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXEW_CURT Ontology
     */
    case TXTL_TXEW_CURT = 'TXTL_TXEW_CURT';

    /**
     * Textile fabric
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXEW_FABR Ontology
     */
    case TXTL_TXEW_FABR = 'TXTL_TXEW_FABR';

    /**
     * Textile furnish
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXEW_FURN Ontology
     */
    case TXTL_TXEW_FURN = 'TXTL_TXEW_FURN';

    /**
     * Hide
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXEW_HIDE Ontology
     */
    case TXTL_TXEW_HIDE = 'TXTL_TXEW_HIDE';

    /**
     * Needlework
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXEW_NDLE Ontology
     */
    case TXTL_TXEW_NDLE = 'TXTL_TXEW_NDLE';

    /**
     * Skins
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXEW_SKIN Ontology
     */
    case TXTL_TXEW_SKIN = 'TXTL_TXEW_SKIN';

    /**
     * Textile rolls
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXEW_TRLS Ontology
     */
    case TXTL_TXEW_TRLS = 'TXTL_TXEW_TRLS';

    /**
     * Yarns
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXEW_YARN Ontology
     */
    case TXTL_TXEW_YARN = 'TXTL_TXEW_YARN';

    /**
     * Textile wear
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXLW Ontology
     */
    case TXTL_TXLW = 'TXTL_TXLW';

    /**
     * Wearing appareil
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXLW_APPR Ontology
     */
    case TXTL_TXLW_APPR = 'TXTL_TXLW_APPR';

    /**
     * Clothing
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXLW_CLTH Ontology
     */
    case TXTL_TXLW_CLTH = 'TXTL_TXLW_CLTH';

    /**
     * Footwear
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXLW_FOOT Ontology
     */
    case TXTL_TXLW_FOOT = 'TXTL_TXLW_FOOT';

    /**
     * Garments
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXLW_GARM Ontology
     */
    case TXTL_TXLW_GARM = 'TXTL_TXLW_GARM';

    /**
     * Textiles
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_TXTL_TXTL Ontology
     */
    case TXTL_TXTL = 'TXTL_TXTL';

    /**
     * Valuables
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VALU Ontology
     */
    case VALU = 'VALU';

    /**
     * Bank notes and Coins
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VALU_BANK Ontology
     */
    case VALU_BANK = 'VALU_BANK';

    /**
     * Diamonds
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VALU_DIAM Ontology
     */
    case VALU_DIAM = 'VALU_DIAM';

    /**
     * Gold
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VALU_GOLD Ontology
     */
    case VALU_GOLD = 'VALU_GOLD';

    /**
     * Jewelery
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VALU_JWRY Ontology
     */
    case VALU_JWRY = 'VALU_JWRY';

    /**
     * Platinum
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VALU_PLAT Ontology
     */
    case VALU_PLAT = 'VALU_PLAT';

    /**
     * Precious metal
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VALU_PMET Ontology
     */
    case VALU_PMET = 'VALU_PMET';

    /**
     * Precious stones
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VALU_PSTN Ontology
     */
    case VALU_PSTN = 'VALU_PSTN';

    /**
     * Silver
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VALU_SLVR Ontology
     */
    case VALU_SLVR = 'VALU_SLVR';

    /**
     * Watches
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VALU_WTCH Ontology
     */
    case VALU_WTCH = 'VALU_WTCH';

    /**
     * Vehicle / Machinary, Parts, Spares
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL Ontology
     */
    case VHCL = 'VHCL';

    /**
     * Aircraft
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_AIRC Ontology
     */
    case VHCL_AIRC = 'VHCL_AIRC';

    /**
     * Aircraft accessories
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_AIRC_AACC Ontology
     */
    case VHCL_AIRC_AACC = 'VHCL_AIRC_AACC';

    /**
     * Aicraft engines
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_AIRC_AENG Ontology
     */
    case VHCL_AIRC_AENG = 'VHCL_AIRC_AENG';

    /**
     * Aircraft motors
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_AIRC_AMTR Ontology
     */
    case VHCL_AIRC_AMTR = 'VHCL_AIRC_AMTR';

    /**
     * Aircraft parts
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_AIRC_APRT Ontology
     */
    case VHCL_AIRC_APRT = 'VHCL_AIRC_APRT';

    /**
     * Aircraft supplies
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_AIRC_ASUP Ontology
     */
    case VHCL_AIRC_ASUP = 'VHCL_AIRC_ASUP';

    /**
     * Aircraft wheels
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_AIRC_AWHL Ontology
     */
    case VHCL_AIRC_AWHL = 'VHCL_AIRC_AWHL';

    /**
     * Helicopter
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_AIRC_HELI Ontology
     */
    case VHCL_AIRC_HELI = 'VHCL_AIRC_HELI';

    /**
     * Helicopter parts
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_AIRC_HPRT Ontology
     */
    case VHCL_AIRC_HPRT = 'VHCL_AIRC_HPRT';

    /**
     * Machinery and Tools
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_MACH Ontology
     */
    case VHCL_MACH = 'VHCL_MACH';

    /**
     * Cable coil
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_MACH_COIL Ontology
     */
    case VHCL_MACH_COIL = 'VHCL_MACH_COIL';

    /**
     * Comperssors
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_MACH_COMP Ontology
     */
    case VHCL_MACH_COMP = 'VHCL_MACH_COMP';

    /**
     * Hardware and Equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_MACH_HRDW Ontology
     */
    case VHCL_MACH_HRDW = 'VHCL_MACH_HRDW';

    /**
     * Mechanic products
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_MACH_MECH Ontology
     */
    case VHCL_MACH_MECH = 'VHCL_MACH_MECH';

    /**
     * Machinery supplies and Parts
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_MACH_MTSP Ontology
     */
    case VHCL_MACH_MTSP = 'VHCL_MACH_MTSP';

    /**
     * Oil drilling equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_MACH_OILD Ontology
     */
    case VHCL_MACH_OILD = 'VHCL_MACH_OILD';

    /**
     * Spare parts
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_MACH_PART Ontology
     */
    case VHCL_MACH_PART = 'VHCL_MACH_PART';

    /**
     * Pumping equipment
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_MACH_PUEQ Ontology
     */
    case VHCL_MACH_PUEQ = 'VHCL_MACH_PUEQ';

    /**
     * Ships
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_SHIP Ontology
     */
    case VHCL_SHIP = 'VHCL_SHIP';

    /**
     * Engines and Turbines
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_SHIP_SENG Ontology
     */
    case VHCL_SHIP_SENG = 'VHCL_SHIP_SENG';

    /**
     * Motor and Generator
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_SHIP_SMTR Ontology
     */
    case VHCL_SHIP_SMTR = 'VHCL_SHIP_SMTR';

    /**
     * Ship parts
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_SHIP_SPAR Ontology
     */
    case VHCL_SHIP_SPAR = 'VHCL_SHIP_SPAR';

    /**
     * Ship spares
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_SHIP_SSPA Ontology
     */
    case VHCL_SHIP_SSPA = 'VHCL_SHIP_SSPA';

    /**
     * Surface vehicles
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_SVCL Ontology
     */
    case VHCL_SVCL = 'VHCL_SVCL';

    /**
     * Automobiles
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_SVCL_AUTO Ontology
     */
    case VHCL_SVCL_AUTO = 'VHCL_SVCL_AUTO';

    /**
     * Bicycles
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_SVCL_BICY Ontology
     */
    case VHCL_SVCL_BICY = 'VHCL_SVCL_BICY';

    /**
     * Cartainer
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_SVCL_CRTA Ontology
     */
    case VHCL_SVCL_CRTA = 'VHCL_SVCL_CRTA';

    /**
     * Motorcycles
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_SVCL_MOTO Ontology
     */
    case VHCL_SVCL_MOTO = 'VHCL_SVCL_MOTO';

    /**
     * Automobile parts
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_SVCL_PART Ontology
     */
    case VHCL_SVCL_PART = 'VHCL_SVCL_PART';

    /**
     * Tires
     *
     * @link https://onerecord.iata.org/ns/coreCodeLists#CommodityCode_VHCL_SVCL_TIRE Ontology
     */
    case VHCL_SVCL_TIRE = 'VHCL_SVCL_TIRE';
}
