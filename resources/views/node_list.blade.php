@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <img src="https://pbs.twimg.com/profile_images/1060178364227477504/ylYFkOON_bigger.jpg" class="rounded-circle my-4" alt="Cinque Terre">
        </div>
        <div class="col-sm-10">
            <div class="form-group my-5">
                <input type="text" id="text1" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <button type="button" class="btn btn-dark">Clone</button>
            <i class="fas fa-thumbs-up fa-2x mt-5 ml-3"></i>

        </div>
        <div class="col-sm-10">
            <pre class="prettyprint linenums">
#include &lt;stdio.h&gt;
int main(){
  char c;
  c=getchar();
  char melon[100];

  if(c=='a'){
    printf("Input your name!: \n");
    scanf("%s",&melon);
    printf("Thank you!%s\n",melon);
  }else{
    ungetc(c,stdin);
    printf("input_a!!");
  }
  return 0;
}
            </pre>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2">
            <img src="https://pbs.twimg.com/profile_images/1060178364227477504/ylYFkOON_bigger.jpg" class="rounded-circle my-4" alt="Cinque Terre">
        </div>
        <div class="col-sm-9">
            <div class="form-group my-5">
                <input type="text" id="text1" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-dark">Clone</button>
            <i class="fas fa-thumbs-up fa-2x mt-5 ml-3"></i>

        </div>
        <div class="col-sm-9">
            <pre class="prettyprint linenums">
#include &lt;stdio.h&gt;
int main(){
  char c;
  c=getchar();
  char melon[100];

  if(c=='a'){
    printf("Input your name!: \n");
    scanf("%s",&melon);
    printf("Thank you!%s\n",melon);
  }else{
    ungetc(c,stdin);
    printf("input_a!!");
  }
  return 0;
}
            </pre>
        </div>
    </div>

</div>

@endsection