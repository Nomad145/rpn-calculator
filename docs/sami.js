
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:App" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App.html">App</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Command" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Command.html">Command</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Command_CalculatorCommand" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Command/CalculatorCommand.html">CalculatorCommand</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Exception" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Exception.html">Exception</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Exception_CalculatorException" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Exception/CalculatorException.html">CalculatorException</a>                    </div>                </li>                            <li data-name="class:App_Exception_ExpressionException" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Exception/ExpressionException.html">ExpressionException</a>                    </div>                </li>                            <li data-name="class:App_Exception_InsufficientOperandsException" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Exception/InsufficientOperandsException.html">InsufficientOperandsException</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Factory" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Factory.html">Factory</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Factory_OperatorFactory" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Factory/OperatorFactory.html">OperatorFactory</a>                    </div>                </li>                            <li data-name="class:App_Factory_OperatorFactoryInterface" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Factory/OperatorFactoryInterface.html">OperatorFactoryInterface</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Operators" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Operators.html">Operators</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Operators_Addition" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Operators/Addition.html">Addition</a>                    </div>                </li>                            <li data-name="class:App_Operators_Division" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Operators/Division.html">Division</a>                    </div>                </li>                            <li data-name="class:App_Operators_Modulo" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Operators/Modulo.html">Modulo</a>                    </div>                </li>                            <li data-name="class:App_Operators_Multiplication" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Operators/Multiplication.html">Multiplication</a>                    </div>                </li>                            <li data-name="class:App_Operators_OperatorInterface" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Operators/OperatorInterface.html">OperatorInterface</a>                    </div>                </li>                            <li data-name="class:App_Operators_Subtraction" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Operators/Subtraction.html">Subtraction</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_CalculatorInterface" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/CalculatorInterface.html">CalculatorInterface</a>                    </div>                </li>                            <li data-name="class:App_Expression" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Expression.html">Expression</a>                    </div>                </li>                            <li data-name="class:App_RPNCalculator" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/RPNCalculator.html">RPNCalculator</a>                    </div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "App.html", "name": "App", "doc": "Namespace App"},{"type": "Namespace", "link": "App/Command.html", "name": "App\\Command", "doc": "Namespace App\\Command"},{"type": "Namespace", "link": "App/Exception.html", "name": "App\\Exception", "doc": "Namespace App\\Exception"},{"type": "Namespace", "link": "App/Factory.html", "name": "App\\Factory", "doc": "Namespace App\\Factory"},{"type": "Namespace", "link": "App/Operators.html", "name": "App\\Operators", "doc": "Namespace App\\Operators"},
            {"type": "Interface", "fromName": "App", "fromLink": "App.html", "link": "App/CalculatorInterface.html", "name": "App\\CalculatorInterface", "doc": "&quot;Defines behavior of Calculator Implementations.&quot;"},
                                                        {"type": "Method", "fromName": "App\\CalculatorInterface", "fromLink": "App/CalculatorInterface.html", "link": "App/CalculatorInterface.html#method_evaluate", "name": "App\\CalculatorInterface::evaluate", "doc": "&quot;Evaluate an expression.&quot;"},
            
            {"type": "Interface", "fromName": "App\\Factory", "fromLink": "App/Factory.html", "link": "App/Factory/OperatorFactoryInterface.html", "name": "App\\Factory\\OperatorFactoryInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Factory\\OperatorFactoryInterface", "fromLink": "App/Factory/OperatorFactoryInterface.html", "link": "App/Factory/OperatorFactoryInterface.html#method_makeFromSymbol", "name": "App\\Factory\\OperatorFactoryInterface::makeFromSymbol", "doc": "&quot;Create an Operator from its symbol.&quot;"},
                    {"type": "Method", "fromName": "App\\Factory\\OperatorFactoryInterface", "fromLink": "App/Factory/OperatorFactoryInterface.html", "link": "App/Factory/OperatorFactoryInterface.html#method_getSupportedOperators", "name": "App\\Factory\\OperatorFactoryInterface::getSupportedOperators", "doc": "&quot;Get a list of operators supported by this factory.&quot;"},
                    {"type": "Method", "fromName": "App\\Factory\\OperatorFactoryInterface", "fromLink": "App/Factory/OperatorFactoryInterface.html", "link": "App/Factory/OperatorFactoryInterface.html#method_supports", "name": "App\\Factory\\OperatorFactoryInterface::supports", "doc": "&quot;Determine if the given operator is supported by the factory.&quot;"},
            
            {"type": "Interface", "fromName": "App\\Operators", "fromLink": "App/Operators.html", "link": "App/Operators/OperatorInterface.html", "name": "App\\Operators\\OperatorInterface", "doc": "&quot;Defines the behavior of Operators.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Operators\\OperatorInterface", "fromLink": "App/Operators/OperatorInterface.html", "link": "App/Operators/OperatorInterface.html#method___invoke", "name": "App\\Operators\\OperatorInterface::__invoke", "doc": "&quot;Evaluate an expression with two operands.&quot;"},
            
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/CalculatorInterface.html", "name": "App\\CalculatorInterface", "doc": "&quot;Defines behavior of Calculator Implementations.&quot;"},
                                                        {"type": "Method", "fromName": "App\\CalculatorInterface", "fromLink": "App/CalculatorInterface.html", "link": "App/CalculatorInterface.html#method_evaluate", "name": "App\\CalculatorInterface::evaluate", "doc": "&quot;Evaluate an expression.&quot;"},
            
            {"type": "Class", "fromName": "App\\Command", "fromLink": "App/Command.html", "link": "App/Command/CalculatorCommand.html", "name": "App\\Command\\CalculatorCommand", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Command\\CalculatorCommand", "fromLink": "App/Command/CalculatorCommand.html", "link": "App/Command/CalculatorCommand.html#method___construct", "name": "App\\Command\\CalculatorCommand::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Command\\CalculatorCommand", "fromLink": "App/Command/CalculatorCommand.html", "link": "App/Command/CalculatorCommand.html#method_configure", "name": "App\\Command\\CalculatorCommand::configure", "doc": "&quot;{@inheritdoc}&quot;"},
                    {"type": "Method", "fromName": "App\\Command\\CalculatorCommand", "fromLink": "App/Command/CalculatorCommand.html", "link": "App/Command/CalculatorCommand.html#method_execute", "name": "App\\Command\\CalculatorCommand::execute", "doc": "&quot;{@inheritdoc}&quot;"},
                    {"type": "Method", "fromName": "App\\Command\\CalculatorCommand", "fromLink": "App/Command/CalculatorCommand.html", "link": "App/Command/CalculatorCommand.html#method_evaluate", "name": "App\\Command\\CalculatorCommand::evaluate", "doc": "&quot;Evaluate user input and display the result to the screen.&quot;"},
            
            {"type": "Class", "fromName": "App\\Exception", "fromLink": "App/Exception.html", "link": "App/Exception/CalculatorException.html", "name": "App\\Exception\\CalculatorException", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Exception", "fromLink": "App/Exception.html", "link": "App/Exception/ExpressionException.html", "name": "App\\Exception\\ExpressionException", "doc": "&quot;An exception thrown during Expression validation.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Exception\\ExpressionException", "fromLink": "App/Exception/ExpressionException.html", "link": "App/Exception/ExpressionException.html#method_forInvalidExpression", "name": "App\\Exception\\ExpressionException::forInvalidExpression", "doc": "&quot;An exceptional case occurring when the given expression contains values\nthat are known to be invalid.&quot;"},
                    {"type": "Method", "fromName": "App\\Exception\\ExpressionException", "fromLink": "App/Exception/ExpressionException.html", "link": "App/Exception/ExpressionException.html#method_forEmptyExpression", "name": "App\\Exception\\ExpressionException::forEmptyExpression", "doc": "&quot;An exceptional case occurring when the given expression is empty.&quot;"},
            
            {"type": "Class", "fromName": "App\\Exception", "fromLink": "App/Exception.html", "link": "App/Exception/InsufficientOperandsException.html", "name": "App\\Exception\\InsufficientOperandsException", "doc": "&quot;Occurs when attempting to evaluate an expression with an insufficient number\nof operands.&quot;"},
                    
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Expression.html", "name": "App\\Expression", "doc": "&quot;A Value Object representing a whole, or a part of an expression.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Expression", "fromLink": "App/Expression.html", "link": "App/Expression.html#method_fromInput", "name": "App\\Expression::fromInput", "doc": "&quot;A named constructor for creating an Expression from string input.&quot;"},
                    {"type": "Method", "fromName": "App\\Expression", "fromLink": "App/Expression.html", "link": "App/Expression.html#method_toArray", "name": "App\\Expression::toArray", "doc": "&quot;Get the expression as an array.&quot;"},
            
            {"type": "Class", "fromName": "App\\Factory", "fromLink": "App/Factory.html", "link": "App/Factory/OperatorFactory.html", "name": "App\\Factory\\OperatorFactory", "doc": "&quot;A static factory for creating various operators.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Factory\\OperatorFactory", "fromLink": "App/Factory/OperatorFactory.html", "link": "App/Factory/OperatorFactory.html#method_makeFromSymbol", "name": "App\\Factory\\OperatorFactory::makeFromSymbol", "doc": "&quot;Create an Operator from its symbol.&quot;"},
                    {"type": "Method", "fromName": "App\\Factory\\OperatorFactory", "fromLink": "App/Factory/OperatorFactory.html", "link": "App/Factory/OperatorFactory.html#method_getSupportedOperators", "name": "App\\Factory\\OperatorFactory::getSupportedOperators", "doc": "&quot;Get a list of operators supported by this factory.&quot;"},
                    {"type": "Method", "fromName": "App\\Factory\\OperatorFactory", "fromLink": "App/Factory/OperatorFactory.html", "link": "App/Factory/OperatorFactory.html#method_supports", "name": "App\\Factory\\OperatorFactory::supports", "doc": "&quot;Determine if the given operator is supported by the factory.&quot;"},
            
            {"type": "Class", "fromName": "App\\Factory", "fromLink": "App/Factory.html", "link": "App/Factory/OperatorFactoryInterface.html", "name": "App\\Factory\\OperatorFactoryInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Factory\\OperatorFactoryInterface", "fromLink": "App/Factory/OperatorFactoryInterface.html", "link": "App/Factory/OperatorFactoryInterface.html#method_makeFromSymbol", "name": "App\\Factory\\OperatorFactoryInterface::makeFromSymbol", "doc": "&quot;Create an Operator from its symbol.&quot;"},
                    {"type": "Method", "fromName": "App\\Factory\\OperatorFactoryInterface", "fromLink": "App/Factory/OperatorFactoryInterface.html", "link": "App/Factory/OperatorFactoryInterface.html#method_getSupportedOperators", "name": "App\\Factory\\OperatorFactoryInterface::getSupportedOperators", "doc": "&quot;Get a list of operators supported by this factory.&quot;"},
                    {"type": "Method", "fromName": "App\\Factory\\OperatorFactoryInterface", "fromLink": "App/Factory/OperatorFactoryInterface.html", "link": "App/Factory/OperatorFactoryInterface.html#method_supports", "name": "App\\Factory\\OperatorFactoryInterface::supports", "doc": "&quot;Determine if the given operator is supported by the factory.&quot;"},
            
            {"type": "Class", "fromName": "App\\Operators", "fromLink": "App/Operators.html", "link": "App/Operators/Addition.html", "name": "App\\Operators\\Addition", "doc": "&quot;The addition operator.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Operators\\Addition", "fromLink": "App/Operators/Addition.html", "link": "App/Operators/Addition.html#method___invoke", "name": "App\\Operators\\Addition::__invoke", "doc": "&quot;Evaluate an expression with two operands.&quot;"},
            
            {"type": "Class", "fromName": "App\\Operators", "fromLink": "App/Operators.html", "link": "App/Operators/Division.html", "name": "App\\Operators\\Division", "doc": "&quot;The division operator.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Operators\\Division", "fromLink": "App/Operators/Division.html", "link": "App/Operators/Division.html#method___invoke", "name": "App\\Operators\\Division::__invoke", "doc": "&quot;Evaluate an expression with two operands.&quot;"},
            
            {"type": "Class", "fromName": "App\\Operators", "fromLink": "App/Operators.html", "link": "App/Operators/Modulo.html", "name": "App\\Operators\\Modulo", "doc": "&quot;The modulo operator.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Operators\\Modulo", "fromLink": "App/Operators/Modulo.html", "link": "App/Operators/Modulo.html#method___invoke", "name": "App\\Operators\\Modulo::__invoke", "doc": "&quot;Evaluate an expression with two operands.&quot;"},
            
            {"type": "Class", "fromName": "App\\Operators", "fromLink": "App/Operators.html", "link": "App/Operators/Multiplication.html", "name": "App\\Operators\\Multiplication", "doc": "&quot;The multiplication operator.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Operators\\Multiplication", "fromLink": "App/Operators/Multiplication.html", "link": "App/Operators/Multiplication.html#method___invoke", "name": "App\\Operators\\Multiplication::__invoke", "doc": "&quot;Evaluate an expression with two operands.&quot;"},
            
            {"type": "Class", "fromName": "App\\Operators", "fromLink": "App/Operators.html", "link": "App/Operators/OperatorInterface.html", "name": "App\\Operators\\OperatorInterface", "doc": "&quot;Defines the behavior of Operators.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Operators\\OperatorInterface", "fromLink": "App/Operators/OperatorInterface.html", "link": "App/Operators/OperatorInterface.html#method___invoke", "name": "App\\Operators\\OperatorInterface::__invoke", "doc": "&quot;Evaluate an expression with two operands.&quot;"},
            
            {"type": "Class", "fromName": "App\\Operators", "fromLink": "App/Operators.html", "link": "App/Operators/Subtraction.html", "name": "App\\Operators\\Subtraction", "doc": "&quot;The subtraction operator.&quot;"},
                                                        {"type": "Method", "fromName": "App\\Operators\\Subtraction", "fromLink": "App/Operators/Subtraction.html", "link": "App/Operators/Subtraction.html#method___invoke", "name": "App\\Operators\\Subtraction::__invoke", "doc": "&quot;Evaluate an expression with two operands.&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/RPNCalculator.html", "name": "App\\RPNCalculator", "doc": "&quot;A Reverse Polish Notation Calculator.&quot;"},
                                                        {"type": "Method", "fromName": "App\\RPNCalculator", "fromLink": "App/RPNCalculator.html", "link": "App/RPNCalculator.html#method_evaluate", "name": "App\\RPNCalculator::evaluate", "doc": "&quot;Evaluate an expression.&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


