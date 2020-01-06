<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p>
                    Hit or Stay gameplay is based on Atlantic City and Las Vegas multiple deck casinos rules. Blackjack
                    rules vary from casino to casino, which makes learning blackjack strategy more complicated. However,
                    many correct moves are fundamental enough that they do not differ from casino to casino, and most
                    large scale casinos have very similar rules - usually matching those in Vegas or A.C.. The strategy
                    tables for Vegas and A.C. are displayed below.
                </p>

                <p>
                    Basic Blackjack Rules:
                <ul class="noListStyling">
                    <li >The goal of blackjack is to beat the dealer's hand without going over 21.</li>
                    <li>Face cards are worth 10. Aces are worth 1 or 11, whichever makes a better hand.</li>
                    <li>Each player starts with two cards, one of the dealer's cards is hidden until the end.</li>
                    <li>To 'Hit' is to ask for another card. To 'Stay' is to hold your total and end your turn.</li>
                    <li>If you go over 21 you bust, and the dealer wins regardless of the dealer's hand.</li>
                    <li>If you are dealt 21 from the start (Ace & 10), you got a blackjack.</li>
                    <!--                    <li>Blackjack means you win 1.5 the amount of your bet.</li>-->
                    <li>Dealer will hit until his/her cards total 17 or higher.</li>
                    <!--                    <li>Doubling is like a hit, only the bet is doubled and you only get one more card.</li>-->
                    <!--                    <li>Split can be done when you have two of the same card - the pair is split into two hands.</li>-->
                    <!--                    <li>Splitting also doubles the bet, because each new hand is worth the original bet.</li>-->
                    <!--                    <li>You can only double/split on the first move, or first move of a hand created by a split.</li>-->
                    <!--                    <li>You cannot play on two aces after they are split.</li>-->
                    <!--                    <li>You can double on a hand resulting from a split, tripling or quadrupling you bet.</li>-->
                </ul>
                </p>


            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('About mounted.')
        }
    }
</script>
