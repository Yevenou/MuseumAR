# MuseumAR | IM5

⚠️- Diese Website funktioniert nur mit Google Chrome oder Opera (01.12.2023)  
ℹ️ - Die Datei "Museums.sql" ist ein Export der Datenbank  

## Ziel  
Als letztes Projekt des Moduls Interaktive Medien 5 mussten wir eine Website oder Webanwendung unserer Wahl zum Thema unseres Bachelorprojekts erstellen. In meinem Projekt geht es um Augmented Reality (AR) in Museen. Die Idee ist, eine Website für eine Anwendung zu erstellen, die von Museen genutzt werden kann, um ihre Ausstellungen interaktiver zu gestalten. Die wichtigsten Aspekte der Website sind also (1) wie man diese Anwendung bekommt, (2) wie man sie benutzt und (3) wo man sie benutzt.

## Vorgehensweise  
Ich begann damit, zu definieren, welche Art von Inhalt ich auf der Website benötigte und welche Art von Technologien ich brauchen würde. Auf der Suche nach Webtechnologien, die zu meiner Idee passen würden, fand ich eine Website, die zeigte, wie man Scroll-Animationen nur mit CSS erstellen kann, und da ich sie interessant fand, begann ich, sie zu implementieren, um sie in der ersten Hälfte der Seite zu verwenden. Außerdem verwende ich immer Flexbox, um die Elemente in den Seiten, die ich programmiere, zu positionieren, also begann ich, die Seite damit zu layouten.  
Danach habe ich PHP und SQL verwendet, um Informationen aus einer Datenbank zu holen, die ich manuell in das Webportal phpMyAdmin eingegeben habe. Diese Datenbank enthält eine fiktive Liste von Museen, die die App in ihrer Ausstellung verwenden. Ich habe auch eine Suchfunktion implementiert, die sucht, wenn sich die Eingabe im Titelbereich der Datenbank befindet.  
Natürlich änderte ich währenddessen immer wieder das CSS, um der Seite ihre Form zu geben und zu sehen, ob alles in der Desktop-Version funktioniert. Zum Schluss habe ich dann noch alle Media Queries für die mobile Version der Seite erstellt.

## Challenges  
Erst nachdem ich den CSS-Code für die Scroll-Animation implementiert hatte, bemerkte ich, dass er nicht von allen Browsern unterstützt wurde. Nur Google Chrome und Opera unterstützen "animation-timeline: scroll();". Da die Website bereits funktionierte, wurde mir im Coaching gesagt, ich solle dies als Learning schreiben. Eine weitere Schwierigkeit bestand darin, die Suchfunktion mit PHP zu implementieren, da ich mir nicht sicher war, ob eine Datenbank wirklich notwendig war. Dieser Teil hätte wahrscheinlich auch mit json-Dateien erledigt werden können, aber da ich plante, die Website später von einigen Benutzern bearbeiten zu lassen, um weitere Museen hinzuzufügen, entschied ich mich für eine Datenbank.

## Quellen  
ChatGPT
W3School
Google Fonts
Scroll Animation (https://scroll-driven-animations.style/demos/cover-to-fixed-header/css/)
IM Unterricht Folien
