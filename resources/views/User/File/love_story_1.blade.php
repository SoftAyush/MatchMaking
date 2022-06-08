@extends('User.Layouts.header')
@section('title','Successful Love Story')
@section('content-section')
    <div id="maindiv">
        <h1 class="text"> {{ $story->title }} </h1>
        <div id="fristdiv">
            <center>
                <img src="{{ asset("storage/story/{$story->image}") }}" alt="" height="400px;" width="50%">
            </center>

        </div>

        <div id="buttomdiv">


            {!! $story->story!!}
{{--            {!! $story->story !!}--}}
{{--            <p>--}}
{{--            One day she called me in the morning and asked “Dear, come to your brother’s office as I am coming to the--}}
{{--            bank near that office. I have some work there and want to see you”. Now what could I do? I was thinking in--}}
{{--            heart of heart that true love never goes by physical aspect, so I went there in an ordinary dress only. At--}}
{{--            that time my dressing sense was very poor and also, I had long hair. I never cared about my appearance. So,--}}
{{--            I went there wearing a simple trouser and T-shirt. As per me, I was looking good. She wanted to see me from a--}}
{{--            distance only. But she didn’t want me to see her, I didn’t know why. She called me when she was in front of--}}
{{--            the bank, “Where are you? Come out of office”. My heartbeat increased and finally I came out. She again--}}
{{--            said, “I am not able to see you.” I sat on a chair there and said, “I am right in front of you dear”. “I am--}}
{{--            not able to see you, here is only a very fatty man sitting on chair. Waive your hand” she replied. I waived--}}
{{--            my hand and said, “I am waiving my hand and the man, sitting on chair is me only”, I said. “What? You have--}}
{{--            long hair and you are very fat too”, she exclaimed. “Yeah, I am”, I replied. She angrily put the call off. I--}}
{{--            was mute for some time on hearing that. My heart beat increased as I feared losing her. I called her in--}}
{{--            afternoon. She said, “I don’t want to talk to you, you are a liar”. Those words brought tears in my eyes. I--}}
{{--            planned. She gave a miss call in the evening, but I didn’t respond. Next day I messaged her that I got ill--}}
{{--            in the evening and was in hospital for the whole night. I called her many times but she didn’t respond.--}}
{{--            Finally, she responded and asked me to call after 10 at night. I was very anxious. It was a cold winter--}}
{{--            night and I was on my roof top at 10 in night. I called her, and her first reaction was very disturbing for--}}
{{--            me. I was shocked. “You liar………. think what you have done, broken my trust, I have decided not to continue--}}
{{--            any type of relation with you, I trusted you and you have done this to me” then she started weeping. I was--}}
{{--            feeling guilty and said, “Dear I did not intend to hurt you but feared losing you. I was also aware of your--}}
{{--            disliking for fatty people that’s why I did not tell you the truth. You don’t know how much I love you. I--}}
{{--            will die without you”. She replied in anger, “Ok, fine. I agree that you do not want to lose me as you are--}}
{{--            fat, but you lied to me that you were in the hospital that day but me, Shivalik and her fiancé saw you at--}}
{{--            your brother’s office that evening. Don’t you think of me and my love for you while lying about these things--}}
{{--            to me” and started weeping again. “No dear, I was feeling very insecure after you saw me as I judged on--}}
{{--            talking to you that you didn’t like me” I replied with tears. “I don’t want to talk to you any more, this is--}}
{{--            my last call to you”, she said angrily. I begged her, “Don’t do this to me dear, I will certainly die--}}
{{--            without your love. I will do whatever you want. I will lose my weight at any cost, please be with me, I beg--}}
{{--            of you”. “I am not so generous. Firstly, I agreed to compromise on your problem and now this. I lost my--}}
{{--            father few years back; I want someone who can support me. This situation is so painful for me that the--}}
{{--            person whom I loved and trusted has broken it. I want to die, I want to die”, she cried in tears. “I beg of--}}
{{--            you dear, don’t do that I will also die without you. I will do whatever you want. Please forgive me”, I--}}
{{--            replied. We both were in tears, after some time she said, “I need time to take decision and I will tell you--}}
{{--            tomorrow that what is to be done about our relation and so-called love”, and then she cut the call. It was a--}}
{{--            matter of life and death for me. My tears were unstoppable as I did not know the destiny of my love. Whole--}}
{{--            night I was thinking of ending my life if I had to be without my love. I was cursing God for everything.--}}
{{--            Next day I called her, “Hi dear, how are you?” in a very emotional voice. She replied, “I don’t want to talk--}}
{{--            to you, you played with my feelings, what I can do now, I want to die,” “No dear, I will die without you but--}}
{{--            please give me one more chance, I will reduce my weight in 3 months, I promise.” After lot of arguments she--}}
{{--            agreed but on a condition that I send my recent photographs to her. I saw a ray of hope. I was out looking--}}
{{--            for a photographer and within one hour I did send her the photographs. Then I called her, “Hi dear, did you--}}
{{--            see the photographs?” She started weeping loudly and asked, “Why have you done this to me, I don’t see any--}}
{{--            happiness in my life, I lost my father, I trusted you after him and you betrayed me. I will not bear this--}}
{{--            thing, I will certainly die”. I was also in tears and asked her, “Please tell me what has happened, I have--}}
{{--            sent the photographs to you, have you seen them? She replied, “It seems that this is the photograph of any--}}
{{--            Dracula with long hairs”. I pleaded, “Dear, I will get them cut for you and send you the photographs. Though--}}
{{--            I am fat, yet I am smart”. “Smart!!! hmmm, good joke” she replied sarcastically. “Ok I will send you the--}}
{{--            photograph tomorrow” I said. I never wanted to cut the hair I had grown over the last six months. My mother--}}
{{--            asked me many times to get them cut but I didn’t listen to her and did not want anyone to interfere in that--}}
{{--            as long hairs were my passion. But now my love was at stake, so I decided to sacrifice my long-grown hairs.--}}
{{--            I was very much sad on seeing them cut and falling on floor. I did send my photograph to her. She got--}}
{{--            relaxed on seeing that and commented, “You are looking like a human now but yesterday you looked like an--}}
{{--            animal”. I got angry on hearing that but didn’t react. I thought that if it is only the physical appearance--}}
{{--            which matters to her and not my feeling then my endless love may have no value for her. But I was addicted--}}
{{--            to her love, her talks and it was very hard for me to give up that addiction. But I got relaxed that she--}}
{{--            would be with me after the sacrifices which I was doing for her. She elucidated it one by one. “You should--}}
{{--            keep short hair”. “You should do exercise and yoga everyday”. “You have to control your diet, no high--}}
{{--            calorie food, no breakfast only salad, in lunch only two chapattis with curd, in dinner only two chapattis--}}
{{--            with boiled dal”. The biggest sacrifice which I made was of tea, as I was addicted to taking nearly 10 cups--}}
{{--            of tea a day but as per strict book of rules framed by my beloved I was supposed to take two cups of tea a--}}
{{--            day and that too without sugar. For one addiction (her love) I had to give up other ones. The most important--}}
{{--            of the rules was to send my photographs to her every fortnight for the evaluation of my performance and then--}}
{{--            I had to bear the result in the form of her happiness or annoyance which depended on my performance. I--}}
{{--            decided to obey the regulations rigorously. When I was about to leave Jammu in a day or so, she called me--}}
{{--            and said, “Show me the result in two three months otherwise I would be out of your life, and then don’t try--}}
{{--            to make me emotional. You will have to change your physique. I see many people on airport, but no one looks--}}
{{--            like you. I want you to be of such a physique that everyone gets impressed on seeing. What about your--}}
{{--            treatment, are you going to Amritsar tomorrow for the check up?” I was little disturbed, as I had lied to--}}
{{--            her that I was following the advice taken Amritsar for my treatment as I left following the same 5 years--}}
{{--            ago. I lied again, “Yes dear, off course, I am going tomorrow for treatment”. I was little disturbed with--}}
{{--            her behavior but thought that every girl has the right to choose the best for her as her partner; she was--}}
{{--            trying to do that only. I was also excited that she was taking full interest in me. One day before I had to--}}
{{--            leave Jammu, my younger brother read messages sent by her and now my family came to know about her. They--}}
{{--            tried to ask many questions, but I did not them anything. Next day, I left Jammu at 5 am she called me at 6--}}
{{--            and said, “Take care of yourself and follow the diet as I have told you. Also make sure to follow the doctor--}}
{{--            in Amritsar, bye”. I didn’t know what to say as one problem or the other was there which I had to solve. But--}}
{{--            I left everything on destiny. She called me and asked, “Where are you dear?” 45 “I have reached Amritsar--}}
{{--            dear and taking medicine”. I lied to her. She got suspicious and asked, “Tell me the distance which you have--}}
{{--            travelled and how could you reach there so soon”. I got angry and said, “Why don’t you trust me at all. I am--}}
{{--            doing all this for your sake and still you doubt me.” Then she asked in an emotional tone, “I know you are--}}
{{--            there for me dear, you talk to the doctor and then take food. I will talk to you in evening”. I was feeling--}}
{{--            culpable as I had lied to her again, but it was better to lie than to be in pain. I was looking bit slim and--}}
{{--            everyone in my hostel was amazed on seeing that. I got up early in the morning with great excitement and--}}
{{--            even sometimes my beloved used to call me to wake me up. Sometimes my friends forced me to take butter or--}}
{{--            high calories food, but I never took as I was fully in her love and left all those things for her. Her love--}}
{{--            was more important for me than other pleasures of life. I was feeling great exhilaration in my life. I was--}}
{{--            filled with great vitality and enthusiasm. I took care of my health well not for me but for my beloved. I--}}
{{--            was feeling as if some mystical vigor would do all things and I was filled with great energy. She instructed--}}
{{--            me what to eat and what not to and I followed those instructions with great zeal. She acted as a perfect--}}
{{--            guide. I used to send her the photographs every 15 days as directed by her so that she can make out how much--}}
{{--            weight I had lost. But sometimes I asked myself that is its true love but then convinced myself that she--}}
{{--            cared for me. I had a great trust in her, even more than myself. This continued for weeks and I was looking--}}
{{--            slim and handsome now. </p>--}}
            <br><br>
            <center>********************************</center>
            <br>
{{--            <h4>From this site:https://www.researchgate.net/publication/261192381_The_Lost_Love_Regained_A_fictional_Novel</h4>--}}
        </div>
    </div>
@endsection
