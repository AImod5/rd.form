
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" defer></script>
    <script src="app.js" defer></script>
    <title>Application form</title>
</head>
<body>
<form action="#" @submit="checkForm" id="app" method="post">

    <header>
        <h2>Application form</h2>
        <div>Fill the form and answer the questions.</div>
        <div><p v-if="errors.length">
                <b>Please correct the following error(s):</b>
            <ul>
                <li v-for="error in errors">{{ error }}</li>
            </ul>
            </p></div>
    </header>

    <div>
        <label class="desc" id="title1" for="Field1">Full Name</label>
        <div>
            <input id="Field1" v-model="field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="1">
        </div>
    </div>

    <div>
        <label class="desc" id="title12" for="Field12">Date of birth</label>
        <div>
            <input id="Field1" v-model="field12" name="Field12" type="date" class="field text fn" value="" size="8" tabindex="1">
        </div>
    </div>

    <div>
        <label class="desc" id="title13" for="Field13">Phone number <span id="tel">00-000-000</span></label>
        <div>
            <input id="Field1" v-model="field13" name="Field13" type="tel" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}" class="field text fn" value="" size="8" tabindex="1">
        </div>
    </div>

    <div>
        <label class="desc" id="title3" for="Field3">
            Email
        </label>
        <div>
            <input id="Field3" v-model="field3" name="Field3" type="email" spellcheck="false" value="" maxlength="255" tabindex="3">
        </div>
    </div>

    <div>
        <label class="desc" id="title4" for="Field4">
            Why you want to learn coding?
        </label>

        <div>
            <textarea id="Field4" v-model="field4" name="Field4" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
        </div>
    </div>

    <div>
        <fieldset>

            <legend id="title5" class="desc">
                How many numbers are odd numbers between 1 and 100 ?
            </legend>

            <div>
                <input id="radioDefault_5" name="Field5" type="hidden" value="">
                <div>
                    <input id="Field5_0" name="Field5" type="radio" value="First Choice" tabindex="5" checked="checked">
                    <label class="choice" for="Field5_0">47</label>
                </div>
                <div>
                    <input id="Field5_1" name="Field5" type="radio" value="Second Choice" tabindex="6">
                    <label class="choice" for="Field5_1">50</label>
                </div>
                <div>
                    <input id="Field5_2" name="Field5" type="radio" value="Third Choice" tabindex="7">
                    <label class="choice" for="Field5_2">49</label>
                </div>
            </div>
        </fieldset>
    </div>

    <div>
        <fieldset>
            <legend id="title6" class="desc">
                How many numbers are odd numbers between 1 and 100 including ?
            </legend>
            <div>
                <input id="radioDefault_6" name="Field6" type="hidden" value="">
                <div>
                    <input id="Field6_0" name="Field6" type="radio" value="First Choice" tabindex="8">
                    <label class="choice" for="Field6_0">50</label>
                </div>
                <div>
                    <input id="Field6_1" name="Field6" type="radio" value="Second Choice" tabindex="9">
                    <label class="choice" for="Field6_1">49</label>
                </div>
                <div>
                    <input id="Field6_2" name="Field6" type="radio" value="Third Choice" tabindex="10">
                    <label class="choice" for="Field6_2">48</label>
                    </span>
                </div>
        </fieldset>
    </div>

    <div>
        <label class="desc" id="title106" for="Field106">
            JS code given  [1,2,3] == [1,2,3]  what result will be ?
        </label>
        <div>
            <select id="Field106" name="Field106" class="field select medium" tabindex="11">
                <option value="First Choice">TRUE</option>
                <option value="Second Choice">FALSE</option>
                <option value="Third Choice">ERROR</option>
            </select>
        </div>
    </div>

    <div>
        <div>
            <input id="saveForm" name="saveForm" type="submit" value="Submit">
            <input id="saveForm" name="reset" type="reset" value="Reset">
        </div>
    </div>

</form>
</body>
</html>
