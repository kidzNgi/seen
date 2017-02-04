@extends('layouts.site')
@push('styles')
<style type="text/css">
    /* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
  padding-bottom: 20px;
}

</style>
@endpush
@section('content')
<div class="jumbotron" style="background-color: #f3f4fa;">
      <div class="container">
        <h2>หลักสูตรปริญญาเอก</h2>
        <p><a href="{{url('pdf/Course/doctorate/1485150011.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i>หลักสูตรปรัชญาดุษฎีบัณฑิต (ปร.ด.)เทคโนโลยีและการจัดการสิ่งแวดล้อม (หลักสูตรใหม่ 2556)</a></p>
        <p><a href="{{url('pdf/Course/doctorate/1485150030.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i>หลักสูตรปรัชญาดุษฎีบัณฑิต (ปร.ด.)การจัดการพลังงานและสมาร์ตกริดเทคโนโลยี (หลักสูตรใหม่ 2558)</a></p>
        <h2>หลักสูตรปริญญาโท</h2>
        <h3>หลักสูตรบัณฑิตศึกษา แผน ก แบบ ก2</h3>
        <p><a href="{{url('pdf/Course/master/1485149785.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i>หลักสูตรวิทยาศาสตรมหาบัณฑิต (วท.ม.)วิทยาศาสตร์สิ่งแวดล้อม (ปรับปรุง 2555)</a></p>
        <p><a href="{{url('pdf/Course/doctorate/1485149727.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i>หลักสูตรวิศวกรรมมหาบัณฑิต (วศ.ม.)วิศวกรรมสิ่งแวดล้อม (ปรับปรุง 2555)</a></p>
        <p><a href="{{url('pdf/Course/doctorate/1485149661.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i>หลักสูตรวิทยาศาสตรมหาบัณฑิต (วท.ม.)การจัดการพลังงานและสมาร์ตกริดเทคโนโลยี (หลักสูตรใหม่ 2558)</a></p>
        <h3>หลักสูตรบัณฑิตศึกษา แผน ข</h3>
        <p><a href="{{url('pdf/Course/master/1485149346.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i>หลักสูตรวิทยาศาสตรมหาบัณฑิต (วท.ม.)สิ่งแวดล้อมและชุมชนนิเวศน์ (หลักสูตรใหม่2556)</a></p>
        <p><a href="{{url('pdf/Course/doctorate/1485148403.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i>หลักสูตรวิศวกรรมมหาบัณฑิต (วศ.ม.)วิศวกรรมสิ่งแวดล้อม (ปรับปรุง 2555)</a></p>
        <p><a href="{{url('pdf/Course/doctorate/1485149961.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i>หลักสูตรวิทยาศาสตรมหาบัณฑิต (วท.ม.)การจัดการพลังงานและสมาร์ตกริดเทคโนโลยี (หลักสูตรใหม่ 2558)</a></p>
        <h2>หลักสูตรปริญญาตรี</h2>
        <p><a href="{{url('pdf/Course/doctorate/1485150039.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i>หลักสูตรวิทยาศาสตรบัณฑิต(วท.บ.)วิทยาศาสตร์สิ่งแวดล้อม</a></p>
        <p><a href="{{url('pdf/Course/doctorate/1485150147.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i> หลักสูตรวิศวกรรมศาสตรบัณฑิต (วศ.บ.) วิศวกรรมสิ่งแวดล้อม</a></p>
        <h2>หลักสูตรปริญญาตรีควบโท</h2>
        <p><a href="{{url('pdf/Course/doctorate/1485150246.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i>วิทยาศาสตรบัณฑิต สาขาวิชาเคมี และวิทยาศาสตรมหาบัณฑิต สาขาวิชาวิทยาศาสตร์สิ่งแวดล้อม</a></p>
        <p><a href="{{url('pdf/Course/doctorate/1485404140.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i>วิทยาศาสตรบัณฑิต สาขาวิชาชีววิทยา และวิทยาศาสตรมหาบัณฑิต สาขาวิชาวิทยาศาสตร์สิ่งแวดล้อม</a></p>
        <p><a href="{{url('pdf/Course/doctorate/1485404279.pdf')}}" target=_blank><i class="fa fa-info-circle" aria-hidden="true"></i>วิทยาศาสตรบัณฑิต สาขาวิชาจุลชีววิทยา และวิทยาศาสตรมหาบัณฑิต สาขาวิชาวิทยาศาสตร์สิ่งแวดล้อม</a></p>
      </div>	
    </div>
@endsection