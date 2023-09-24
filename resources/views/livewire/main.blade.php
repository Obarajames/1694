<div class="max-w-1000  mx-auto border-8 border-dashed border-green-500 min-h-100">
    <!-- Content goes here -->
    <div class="border-8 border-dashed border-goldrod-500 min-h-100 container ">
        <div class="border-8 border-dashed border-blue-500 p-10">
            <h3 class="text-2xl font-medium">Abstract</h3>
            <hr>
            <p>
                We propose a revision of Cardano's on-chain governance system to support the new requirements for Voltaire. The existing specialized governance support for protocol parameter updates and MIR certificates will be removed, and two new fields will be added to normal transaction bodies for:
            </p>
            <ol class="list-decimal pl-6 mt-3">
                <li class="mb-2">governance actions</li>
                <li class="mb-2">votes</li>

            </ol>
            <br>

            <p><b>Any Cardano user </b> will be allowed to submit a <b>governance action.</b> We also introduce three distinct governance bodies that have specific functions in this new governance framework:
            </p>
            <ol class="list-decimal pl-6 mt-3">
                <li class="mb-2">a constitutional committee</li>
                <li class="mb-2">a group of delegate representatives (henceforth called <b>DReps</b>)</li>
                <li class="mb-2">the stake pool operators (henceforth called <b>SPOs</b>)</li>
            </ol>

            <br>
            <p>
                Every governance action must be ratified by at least two of these three governance bodies using their on-chain <b>votes</b>. The type of action and the state of the governance system determines which bodies must ratify it.
            </p>
            <br>
            <p>Ratified actions are then enacted on-chain, following a set of well-defined rules.</p>
            <br>

            <p>
                As with stake pools, any Ada holder may register to be a DRep and so choose to represent themselves and/or others. Also, as with stake pools, Ada holders may, instead, delegate their voting rights to any other DRep. Voting rights will be based on the total Ada that is delegated, as a whole number of Lovelace.
            </p>

            <br>

            <p>
                The most crucial aspect of this proposal is therefore the notion of <b>"one Lovelace = one vote".</b>
            </p>


            <br>
            <p class="text-xl font-normal">Acknowledgements</p>


            <br>


            <br>
            <p>Many people have commented on and contributed to the first draft of this document, which was published in November 2022. We would especially like to thank the following people for providing their wisdom and insights:</p>

            <br>
            <ul class="list-disc ml-10">
                <li class="mb-2">Jack Briggs</li>
                <li class="mb-2">Tim Harrison</li>
                <li class="mb-2">Philip Lazos</li>
                <li class="mb-2">Michael Madoff</li>
                <li class="mb-2">Evangelos Markakis</li>
                <li class="mb-2">Joel Telpner</li>
                <li class="mb-2">Thomas Upfield</li>
            </ul>
            <br>
            <p>
                We would also like to thank those who have commented via Github and other channels.
            </p>

            <!--</details> <details> <summary><strong>2023 Colorado Workshop (28/02 → 01/03)</strong></summary>-->

            <br>
            <p>
            In addition, we would like to thank all the attendees of the workshop that was held in Longmont, Colorado on February 28th and March 1st 2023 for their valuable contributions to this CIP, and for their active championing of Cardano's vision for minimal viable governance. These include:
            </p>
            <br>
            <ul class="list-disc ml-10">
                <li class="mb-2">Adam Rusch, ADAO & Summon</li>
                <li class="mb-2">Addie Girouard</li>
                <li class="mb-2">Andrew Westberg</li>
                <li class="mb-2">Darlington Wleh, LidoNation</li>
                <li class="mb-2">Evangelos Markakis</li>
                <li class="mb-2">James Dunseith, Gimbalabs</li>
                <li class="mb-2">Juana Attieh</li>
                <li class="mb-2" >Kenric Nelson</li>
                <li class="mb-2">Lloyd Duhon, DripDropz</li>
                <li class="mb-2">Marcus Jay Allen</li>
                <li class="mb-2">Marek Mahut, 5 Binaries</li>
                <li class="mb-2">Markus Gufler</li>
                <li class="mb-2">Matthew Capps</li>
                <li class="mb-2">Mercy, Wada</li>
                <li class="mb-2">Michael Dogali</li>
                <li class="mb-2"> Michael Madoff</li>
                <li class="mb-2">Patrick Tobler, NMKR</li>
                <li class="mb-2">Philip Lazos</li>
                <li class="mb-2">π Lanningham, SundaeSwap</li>
                <li class="mb-2">Rick McCracken</li>
                <li class="mb-2">Romain Pellerin</li>
                
            </ul>


        </div>









        <div class="border-8 border-dashed border-blue-500">
            article
        </div>





    </div>

</div>