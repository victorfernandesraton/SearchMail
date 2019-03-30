var err_case = domain_list.reverse();

function similar_text (first, second) {
    // Calculates the similarity between two strings  
    // discuss at: http://phpjs.org/functions/similar_text

    if (first === null || second === null || typeof first === 'undefined' || typeof second === 'undefined') {
        return 0;
    }

    first += '';
    second += '';

    var pos1 = 0,
        pos2 = 0,
        max = 0,
        firstLength = first.length,
        secondLength = second.length,
        p, q, l, sum;

    max = 0;

    for (p = 0; p < firstLength; p++) {
        for (q = 0; q < secondLength; q++) {
            for (l = 0;
            (p + l < firstLength) && (q + l < secondLength) && (first.charAt(p + l) === second.charAt(q + l)); l++);
            if (l > max) {
                max = l;
                pos1 = p;
                pos2 = q;
            }
        }
    }

    sum = max;

    if (sum) {
        if (pos1 && pos2) {
            sum += this.similar_text(first.substr(0, pos2), second.substr(0, pos2));
        }

        if ((pos1 + max < firstLength) && (pos2 + max < secondLength)) {
            sum += this.similar_text(first.substr(pos1 + max, firstLength - pos1 - max), second.substr(pos2 + max, secondLength - pos2 - max));
        }
    }

    return sum;
}

// validando email dessa vez por jquerry
$(document).ready(function() { // ao iniciar o documento...
    $('#verify').click(function() { // se realizado click...
        var mail = $('#mail').val(); // pega o valor do input
        // captura o dominio
        console.log(similar_text(mail,"@gmail.com"));
        var domain = mail.substr(mail.indexOf("@")+1,mail.lenght);
        compout = valid = mostcomp = null;
        domain_list.forEach(element => {
            if (element == domain) {
                valid = true;
                compout = domain;
            }
        });
        if (valid != true) {
            domain_list.forEach(domain_src => {
                if (similar_text(mail,domain_src) > mostcomp) {
                    mostcomp = similar_text(mail,domain_src);
                    compout = domain_src;
                } else if (mostcomp == similar_text(mail,err_case)) {
                    domain_pref.forEach(err_case => {
                        if (compout == err_case || domain_src == err_case) {
                            compout = err_case;
                        }
                    });
                }
            });
        }
        $('#_teste').html(compout); // insere no document
    });
});