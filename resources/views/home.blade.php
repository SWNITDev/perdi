<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
    <link href="\app.css" rel="stylesheet">


    <title>Perspektivdialog</title>
</head>

<body class="d-flex flex-column h-100">
    <header class="mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-between justify-content-between justify-content-lg-between">
                <div>
                    <img
                        src="https://www.stadtwerke-neumuenster.de/typo3conf/ext/swn_template/Resources/Public/Assets/img/svg/logo.svg">
                </div>
                <div class="p-4">
                    <h1>Perspektivdialog</h1>
                </div>

            </div>
        </div>
    </header>







    <div class="container-fluid flex-shrink-0">
        <div class="container">
            <h3> Liebe Mitarbeiterinnen und Mitarbeiter,</h3>

            <p>Wir freuen uns, dass Sie an unserer Umfrage teilnehmen! Ihre Meinung und Ihre Erfahrungen sind uns
                äußerst
                wichtig,
                da sie uns dabei helfen, unser Unternehmen kontinuierlich zu verbessern und Ihnen ein besseres
                Arbeitsumfeld zu
                bieten. Ihre Teilnahme ist entscheidend, und wir schätzen Ihre Zeit und Mühe.</p>
            <p class="space">Herzlichen Dank und beste Grüße</p>
        </div>
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button erste" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Fach- und Medienkompetenzen
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">


                            <div class="row">
                                <div class="col-2">
                                    Arbeitsorganisation
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in gestaltet seine/ihre Arbeitsabläufe strukturiert und
                                    effizient. Merkmale einer
                                    guten Arbeitsorganisation
                                    sind z.B. die pünktliche Abgabe von Aufgaben, die richtige Prioritätensetzung und
                                    auch ein
                                    aufgeräumter Arbeitsplatz.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_1" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio0" id="ao1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="ao1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio0" id="ao2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="ao2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio0" id="ao3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="ao3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio0" id="ao4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="ao4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio0" id="ao5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="ao5">Nicht relevant</label>

                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>


                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Kundenorientierung
                                </div>
                                <div class="col-6">
                                    Die Bedürfnisse der Kundschaft werden ernst genommen und berücksichtigt. Der/die
                                    Mitarbeiter*in ist
                                    stets freundlich und kann Auskunft geben.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_2" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio1" id="ko1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="ko1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio1" id="ko2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="ko2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio1" id="ko3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="ko3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio1" id="ko4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="ko4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio1" id="ko5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="ko5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Arbeitseffizienz
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in arbeitet dann effizient, wenn ein Ziel mit einem möglichst
                                    geringen Einsatz
                                    oder mit einem bestimmten Einsatz
                                    ein möglichst großer Ertrag erreicht wird. Er/sie setzt Prioritäten richtig und
                                    vermeidet u.a.
                                    Multitasking, um fokussiert zu bleiben.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_3" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio2" id="ae1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="ae1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio2" id="ae2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="ae2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio2" id="ae3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="ae3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio2" id="ae4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="ae4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio2" id="ae5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="ae5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-2">
                                    Organisationsfähigkeit
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in kann methodisches Wissen mit Tatkraft und Engagement
                                    umsetzen. Er/sie weiß, wie
                                    man Prioritäten setzt,
                                    verschiedene Arbeitsaufgaben miteinander koordiniert und in eine sinnvolle Abfolge
                                    bringt.4
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_4" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio3" id="of1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="of1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio3" id="of2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="of2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio3" id="of3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="of3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio3" id="of4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="of4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio3" id="of5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="of5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Arbeitssorgfalt
                                </div>
                                <div class="col-6">Der/die Mitarbeiter*in ist gründlich, zuverlässig und termintreu.
                                    Er/sie arbeitet
                                    gewissenhaft,
                                    zielgerichtet, aufmerksam und detailliert.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_5" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio4" id="as1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="as1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio4" id="as2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="as2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio4" id="as3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="as3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio4" id="as4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="as4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio4" id="as5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="as5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-2">
                                    Fachkompetenz
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in kann fachbezogenes und fachübergreifendes Wissen in der
                                    Praxis selbstständig
                                    und eigenverantwortlich anwenden.
                                    Er/sie kann das Wissen auch an andere weitergeben.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_6" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio5" id="fk1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="fk1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio5" id="fk2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="fk2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio5" id="fk3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="fk3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio5" id="fk4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="fk4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio5" id="fk5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="fk5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-2">
                                    Verhandlungskompetenz
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in definiert und kommuniziert das eigene Ziel, erkennt und
                                    berücksichtigt das
                                    Interesse
                                    des/der Verhandlungspartners/-partnerin. Er/sie kann Konflikte sachlich und
                                    konstruktiv lösen.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_7" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio6" id="vk1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="vk1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio6" id="vk2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="vk2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio6" id="vk3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="vk3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio6" id="vk4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="vk4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio6" id="vk5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="vk5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed zweite" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Personale Kompetenzen
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-2">
                                    Teamfähigkeit
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in zeigt Bereitschaft und Fähigkeit, in einer Gruppe zu
                                    arbeiten,
                                    Meinungen und Gedanken anderer weiterzuentwickeln und sich auf Gruppenprozesse
                                    einzulassen.
                                    Er/sie bringt seine Ideen in Gruppen mit ein und kann gemeinsam mit anderen die
                                    gesetzten Ziele
                                    erreichen und Problemlösungen finden.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_8" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio7" id="tf1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="tf1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio7" id="tf2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="tf2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio7" id="tf3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="tf3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio7" id="tf4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="tf4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio7" id="tf5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="tf5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Kommunikationsfähigkeit
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in kann anderen zuhören. Er/sie ist fähig, mündliche und
                                    schriftliche
                                    Informationen mit hoher
                                    Verständlichkeit zu gestalten und weiterzugeben. Bei Irritationen oder
                                    Meinungsverschiedenheiten kann
                                    er/sie bewusst
                                    innehalten und respektvoll reagieren.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_9" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio8" id="kf1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="kf1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio8" id="kf2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="kf2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio8" id="kf3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="kf3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio8" id="kf4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="kf4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio8" id="kf5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="kf5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-2">
                                    Zuverlässigkeit
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in steht zu den von ihm/ihr getroffenen Absprachen und erfüllt
                                    diese gewissenhaft
                                    und pünktlich.
                                    Andere können sich auf sein/ihr Wort verlassen.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_10" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio9" id="zf1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="zf1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio9" id="zf2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="zf2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio9" id="zf3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="zf3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio9" id="zf4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="zf4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio9" id="zf5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="zf5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-2">
                                    Kritikfähigkeit
                                </div>
                                <div class="col-6">
                                    Sachlich formulierte und gerechtfertigte Kritik anzunehmen, ist für den/die
                                    Mitarbeiter*in kein
                                    Problem.
                                    Er/sie scheut sich nicht vor kritischen Gesprächen und hört währenddessen aufmerksam
                                    zu,
                                    lernt aus seinen Fehlern und möchte seine Fähigkeiten verbessern. Er/sie kann
                                    sachliche Kritik äußern
                                    und achtet darauf, niemanden zu verletzen.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_11" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio10" id="kfk1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="kfk1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio10" id="kfk2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="kfk2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio10" id="kfk3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="kfk3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio10" id="kfk4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="kfk4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio10" id="kfk5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="kfk5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Konfliktfähigkeit
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in kann aufkommende Konflikte erkennen und versucht, diese vorab
                                    zu vermeiden oder
                                    abzuschwächen.
                                    Er/sie kann Konflikte ruhig und konstruktiv bewältigen, Lösungen oder Kompromisse
                                    finden und Argumente
                                    nicht persönlich nehmen.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_12" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio11" id="kofk1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="kofk1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio11" id="kofk2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="kofk2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio11" id="kofk3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="kofk3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio11" id="kofk4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="kofk4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio11" id="kofk5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="kofk5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-2">
                                    Fähigkeit zur Selbstreflexion
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in kann sich selbst ganzheitlich betrachten, inklusive aller
                                    Gedanken,
                                    Emotionen und Handlungen. Er/sie analysiert und hinterfragt das eigene Handeln mit
                                    dem Ziel,
                                    mehr über sich herauszufinden. Kritik wird als Chance zur Weiterentwicklung
                                    angesehen und nach
                                    Rückmeldungen wird eigenständig gefragt.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_13" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio12" id="fzs1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="fzs1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio12" id="fzs2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="fzs2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio12" id="fzs3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="fzs3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio12" id="fzs4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="fzs4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio12" id="fzs5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="fzs5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Verantwortungsbewusstsein
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in erfüllt seine Pflichten, weil ihm die Auswirkungen des
                                    eigenen Handels auf sich
                                    selbst und auf andere bewusst ist.
                                    Er/sie behält Termine, Deadlines und Aufgaben im Blick und kümmert sich
                                    eigenverantwortlich darum,
                                    dass alles problemlos verläuft.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_14" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio13" id="vwb1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="vwb1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio13" id="vwb2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="vwb2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio13" id="vwb3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="vwb3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio13" id="vwb4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="vwb4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio13" id="vwb5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="vwb5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Interkulturelle Kompetenz
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in kommt mit Menschen zurecht, die andere kulturelle
                                    Hintergründe haben.
                                    Er/sie verhält sich respektvoll und hat Verständnis für die Bräuche und Sitten
                                    anderer Kulturen.
                                    Er/sie achtet sowohl auf verbale als auch auf nonverbale Kommunikation und kann
                                    problemlos mit
                                    Menschen anderer Kulturen arbeiten.</div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_15" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio14" id="ikk1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="ikk1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio14" id="ikk2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="ikk2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio14" id="ikk3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="ikk3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio14" id="ikk4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="ikk4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio14" id="ikk5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="ikk5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-2">
                                    Belastbarkeit
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in kann unter (schweren) seelischen, sozialen und körperlichen
                                    Anspannungen sowie
                                    bei hoher Arbeitsbelastung
                                    weitgehend Fehlreaktionen vermeiden und zielorientiert, kontrolliert und sachlich
                                    handeln. Der Stress
                                    wird durch eine geeignete
                                    Aktivität, wie z.B. Sport, abgebaut.</div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_16" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio15" id="bbk1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="bbk1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio15" id="bbk2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="bbk2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio15" id="bbk3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="bbk3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio15" id="bbk4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="bbk4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio15" id="bbk5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="bbk5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Engagement-Bereitschaft
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in investiert ein angemessenes Maß an Energie, um gute
                                    Ergebnisse zu erzielen und
                                    SWN voranzubringen.
                                    Er/sie hilft Kolleg*innen, die Unterstützung brauchen. </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_17" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio16" id="ebs1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="ebs1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio16" id="ebs2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="ebs2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio16" id="ebs3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="ebs3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio16" id="ebs4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="ebs4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio16" id="ebs5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="ebs5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Leistungsbereitschaft
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in ist motiviert, sein/ihr psychisches und physisches
                                    Leistungsvermögen
                                    eigenständig einzubringen,
                                    um erforderliche Aufgaben zu erledigen, sich neue Fähigkeiten anzueignen und
                                    angestrebte Ziele zu
                                    erreichen.</div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_18" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio17" id="lbs1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="lbs1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio17" id="lbs2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="lbs2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio17" id="lbs3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="lbs3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio17" id="lbs4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="lbs4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio17" id="lbs5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="lbs5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed dritte" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Lernkompetenz
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-2">
                                    Lernbereitschaft
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in ist bereit, fehlendes fachliches und methodisches Wissen,
                                    tätigkeitsspezifische Qualifikationen und Erfahrungen durch entsprechende
                                    Weiterbildungsmaßnahmen zu
                                    erwerben.
                                    Er/sie ist Neuem gegenüber aufgeschlossen und lernt aus Misserfolgen und Erfolgen.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_19" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio18" id="lbst1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="lbst1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio18" id="lbst2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="lbst2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio18" id="lbst3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="lbst3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio18" id="lbst4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="lbst4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio18" id="lbst5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="lbst5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Innovations- und Veränderungskompetenz
                                </div>
                                <div class="col-6">
                                    Der/die Mitarbeiter*in kann neue Ideen, innovative Ansätze und Verbesserungen
                                    wahrnehmen, äußern,
                                    vorantreiben und diese dann in nutzbringende Prozesse, Produkte oder
                                    Dienstleistungen umsetzen.
                                    Er/sie sieht Veränderungen als Chancen für die Zukunft.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_20" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio19" id="iufk1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="iufk1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio19" id="iufk2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="iufk2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio19" id="iufk3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="iufk3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio19" id="iufk4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="iufk4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio19" id="iufk5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="iufk5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingVier">
                        <button class="accordion-button collapsed vierte" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseVier" aria-expanded="true" aria-controls="collapseVier">
                            Führungskompetenz
                        </button>
                    </h2>
                    <div id="collapseVier" class="accordion-collapse collapse" aria-labelledby="headingVier"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-2">
                                    Vorbildfunktion
                                </div>
                                <div class="col-6">
                                    Die Führungskraft lebt das Leitbild und die Führungsprinzipien von SWN vor.
                                    Er/sie entwickelt sich kontinuierlich weiter und kennt ihre eigenen Schwächen und
                                    Stärken und gesteht
                                    Fehler ein.
                                    Er/sie schafft angemessene Rahmenbedingungen und gibt den Mitarbeitenden ehrliches
                                    und direktes
                                    Feedback,
                                    verhält sich aber immer wertschätzend und motivierend.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_21" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio20" id="vbft1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="vbft1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio20" id="vbft2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="vbft2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio20" id="vbft3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="vbft3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio20" id="vbft4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="vbft4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio20" id="vbft5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="vbft5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-2">
                                    Richtig delegieren
                                </div>
                                <div class="col-6">
                                    Die Führungskraft gibt Aufgaben und Verantwortung an Mitarbeiter*innen ab.
                                    Er/sie kennt die Fähigkeiten der Mitarbeitenden und vertraut auf eine zuverlässige
                                    Bearbeitung der
                                    Aufgaben durch andere.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_22" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio21" id="rgdg1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="rgdg1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio21" id="rgdg2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="rgdg2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio21" id="rgdg3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="rgdg3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio21" id="rgdg4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="rgdg4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio21" id="rgdg5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="rgdg5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Motivieren
                                </div>
                                <div class="col-6">
                                    Eine Führungskraft kann die Mitarbeiter*innen auf verschiedene Weise motivieren.
                                    Die Motivation kann durch Lob, Anerkennung, Feedback, Wertschätzung, transparente
                                    Kommunikation,
                                    Ausbauen von Stärken, Stärken der emotionalen Bindung oder auch durch monetäre
                                    Leistungen erfolgen.
                                    Er/sie begeistert außerdem andere von seinen/ihren Ideen.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_23" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio22" id="mtvr1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="mtvr1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio22" id="mtvr2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="mtvr2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio22" id="mtvr3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="mtvr3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio22" id="mtvr4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="mtvr4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio22" id="mtvr5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="mtvr5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Ziele besprechen
                                </div>
                                <div class="col-6">
                                    Die Führungskraft bespricht kurz- und langfristige Ziele mit allen betroffenen
                                    Mitarbeitenden und
                                    kommuniziert diese immer transparent.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_24" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio23" id="zlbp1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="zlbp1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio23" id="zlbp2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="zlbp2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio23" id="zlbp3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="zlbp3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio23" id="zlbp4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="zlbp4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio23" id="zlbp5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="zlbp5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Ergebnisorientiert
                                </div>
                                <div class="col-6">
                                    Die Führungskraft arbeitet mit dem eigenen Wissen, Erfahrungen und fachlichen sowie
                                    methodischen
                                    Fähigkeiten auf ein zu erzielendes,
                                    vorgegebenes oder selbstgesetztes Ergebnis hin. Das Ziel ist anspruchsvoll, aber
                                    erreichbar und wird
                                    nicht aus den Augen verloren.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_25" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio24" id="ebot1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="ebot1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio24" id="ebot2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="ebot2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio24" id="ebot3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="ebot3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio24" id="ebot4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="ebot4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio24" id="ebot5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="ebot5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Informationsfluss
                                </div>
                                <div class="col-6">
                                    Die Führungskraft stellt den Informationsfluss von oben nach unten und andersherum
                                    und an den
                                    einzelnen Schnittstellen sicher.
                                    Das heißt, wichtige Informationen werden korrekt und zeitnah an den/die
                                    entsprechende*n Empfänger*in
                                    weitergegeben.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_26" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio25" id="infl1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="infl1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio25" id="infl2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="infl2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio25" id="infl3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="infl3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio25" id="infl4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="infl4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio25" id="infl5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="infl5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Coach
                                </div>
                                <div class="col-6">
                                    Eine Führungskraft ist dann ein Coach, wenn er/sie den Mitarbeitenden spezielle
                                    Methoden oder
                                    Selbstkompetenzen vermittelt oder ihnen Rückmeldung zu Verhaltensweisen und zur
                                    Wirkung im
                                    Arbeitsalltag gibt.
                                    Er/sie unterstützt die Mitarbeitenden, gibt ihnen Feedback und versucht eine
                                    positive Fehlerkultur zu
                                    schaffen.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_27" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio26" id="coach1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="coach1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio26" id="coach2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="coach2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio26" id="coach3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="coach3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio26" id="coach4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="coach4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio26" id="coach5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="coach5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Rahmenbedingungen schaffen
                                </div>
                                <div class="col-6">
                                    Die Führungskraft hält seinen/ihren Mitarbeitenden den Rücken frei und ermöglicht
                                    das eigenständige
                                    Arbeiten.
                                    Wird ein/e Mitarbeiter*in z.B. durch etwas von der Arbeit abgehalten, so kümmert
                                    sich die
                                    Führungskraft um bessere Bedingungen.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_28" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio27" id="rbsf1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="rbsf1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio27" id="rbsf2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="rbsf2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio27" id="rbsf3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="rbsf3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio27" id="rbsf4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="rbsf4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio27" id="rbsf5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="rbsf5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Vertrauen
                                </div>
                                <div class="col-6">
                                    Vertrauen kann man auf unterschiedliche Weise gewinnen: die Führungskraft ist in
                                    allen Angelegenheiten
                                    transparent
                                    oder er/sie gibt den Mitarbeitenden Handlungsspielraum, verspricht nur das, was auch
                                    eingehalten
                                    werden kann oder
                                    zeigt Interesse an Mitmenschen und vertraut ihnen auch.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_29" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio28" id="vert1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="vert1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio28" id="vert2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="vert2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio28" id="vert3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="vert3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio28" id="vert4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="vert4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio28" id="vert5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="vert5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Verbindlichkeit
                                </div>
                                <div class="col-6">
                                    Die Führungskraft steht zu seinem/ihrem Wort. Er/sie verfolgt den Grundsatz „Sagen,
                                    was man tut und
                                    tun, was man sagt“.
                                    Für die Mitarbeitenden ist er/sie berechenbar.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_30" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio29" id="verb1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="verb1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio29" id="verb2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="verb2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio29" id="verb3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="verb3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio29" id="verb4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="verb4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio29" id="verb5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="verb5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Digitale/hybride Kompetenz
                                </div>
                                <div class="col-6">
                                    Die Führungskraft verwendet verschiedene Tools (für Home-Office und Büro) für die
                                    Zusammenarbeit
                                    zwischen und mit den Kolleg*innen und weiß, welches Instrument in den verschiedenen
                                    Situationen
                                    anzuwenden ist.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_31" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio30" id="dhkt1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="dhkt1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio30" id="dhkt2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="dhkt2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio30" id="dhkt3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="dhkt3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio30" id="dhkt4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="dhkt4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio30" id="dhkt5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="dhkt5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Empathie-Fähigkeit
                                </div>
                                <div class="col-6">
                                    Eine empathische Führungskraft erkennt die Motivation hinter dem Handeln ihrer
                                    Mitarbeitenden und
                                    kann ihnen dementsprechend die richtigen Aufgaben zuweisen. Er/sie hört den
                                    Mitarbeiter*innen zu,
                                    wertschätzt sie und kann sich in ihre Probleme hineindenken.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_32" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio31" id="emfa1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="emfa1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio31" id="emfa2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="emfa2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio31" id="emfa3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="emfa3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio31" id="emfa4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="emfa4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio31" id="emfa5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="emfa5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    Gesunde Führung
                                </div>
                                <div class="col-6">
                                    Die Führungskraft kann delegieren, Entscheidungsprozesse auch partizipativ
                                    gestalten,
                                    Rahmenbedingungen gesund gestalten, Belastungen bei Mitarbeiter*innen erkennen und
                                    wenn möglich aus
                                    dem Weg räumen.
                                </div>
                                <div class="col-4">
                                    <div class="btn-group" id="frage_33" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio32" id="gefu1"
                                            autocomplete="off" value="1">
                                        <label class="btn btn-outline-primary" for="gefu1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio32" id="gefu2"
                                            autocomplete="off" value="2">
                                        <label class="btn btn-outline-primary" for="gefu2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio32" id="gefu3"
                                            autocomplete="off" value="3">
                                        <label class="btn btn-outline-primary" for="gefu3">3</label>

                                        <input type="radio" class="btn-check" name="btnradio32" id="gefu4"
                                            autocomplete="off" value="4">
                                        <label class="btn btn-outline-primary" for="gefu4">4</label>

                                        <input type="radio" class="btn-check" name="btnradio32" id="gefu5"
                                            autocomplete="off" value="5">
                                        <label class="btn btn-outline-primary" for="gefu5">Nicht relevant</label>
                                    </div>
                                    <p class="info_note">1 ist die geringste, 4 ist die höchste Ausprägung.</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>

            </div>



            <div class="d-grid gap-2 p-5 d-md-flex justify-content-md-end">
                <button class="btn btn-swn btn-lg" type="button" onclick="checkSelection()">Senden</button>
                <p id="warning" class="text-danger" style="display: none;">Nicht alle Fragen sind beantwortet.
                    Überprüfen Sie bitte Ihre Bewertung.</p>
                <p id="ok" class="text-info" style="display: none;">Danke. Sie haben alle Fragen
                    beantwortet.</p>
            </div>

        </div>
    </div>

    <script>
        function checkSelection() {
            const collection = document.querySelectorAll(".btn-group");
            let allSelected = true;

            for (let i = 0; i < collection.length; i++) {
                if (!checkIfChecked(collection[i].querySelectorAll(".btn-check"))) {
                    collection[i].scrollIntoView(false);
                    allSelected = false;
                    break;
                }
            }

            // Überprüft, ob alle Optionen ausgewählt wurden oder nicht
            if (!allSelected) {
                // Wenn nicht alle ausgewählt sind, zeige die Warnung an
                document.getElementById("warning").style.display = "block";
                // Verstecke die Erfolgsmeldung
                document.getElementById("ok").style.display = "none";
            } else {
                // Wenn alle ausgewählt sind, verstecke die Warnung
                document.getElementById("warning").style.display = "none";
                // Zeige die Erfolgsmeldung an
                document.getElementById("ok").style.display = "block";
            }

        }

        function checkIfChecked(radiobuttons) {
            for (let j = 0; j < radiobuttons.length; j++) {
                if (radiobuttons[j].checked) {
                    return true;
                }
            }
            return false;
        }

        // Hier wird überprüft, ob alle Radio-Buttons ausgewählt sind
        function checkAllSelected() {
            const collection = document.querySelectorAll(".btn-group");
            let allSelected = true;

            for (let i = 0; i < collection.length; i++) {
                if (!checkIfChecked(collection[i].querySelectorAll(".btn-check"))) {
                    allSelected = false;
                    break;
                }
            }

            if (allSelected) {
                document.getElementById("allSelectedMessage").style.display = "block";
            }
        }
    </script>


    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">PerspektivDialog designed by Elena</span>
        </div>
    </footer>




</body>

</html>
