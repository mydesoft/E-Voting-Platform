<?php

use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Admin\LiveSearchController;
use App\Http\Controllers\Admin\RegisteredCandidateController;
use App\Http\Controllers\Admin\RegisteredStudentController;
use App\Http\Controllers\Admin\ShowVerifiedCandidateController;
use App\Http\Controllers\Admin\SuccessfulCandidateController;
use App\Http\Controllers\Admin\SystemAdminController;
use App\Http\Controllers\Candidate\CandidateController;
use App\Http\Controllers\Candidate\VerificationController;
use App\Http\Controllers\Candidate\VerifiedCandidateController;
use App\Http\Controllers\CheckingDetailsController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\PDF\RegisteredCandidatePdfController;
use App\Http\Controllers\PDF\RegisteredStudentPdfController;
use App\Http\Controllers\PDF\SuccessfulCandidatePdfController;
use App\Http\Controllers\Registration\RegistrationController;
use App\Http\Controllers\VoteResultController;
use App\Http\Controllers\Vote\VoteCandidatesController;
use App\Http\Controllers\Vote\VotingController;
use App\Models\President;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/vote_result', [VoteResultController::class, 'votingResult']);

//Index Page
Route::get('/', [LandingPageController::class, 'index'])->name('index');

//Checking Status
Route::get('/forget_code', [CheckingDetailsController::class, 'forgetCode'])->name('forgetCode');

Route::post('/forget_code', [CheckingDetailsController::class, 'sendCode'])->name('sendCode');

Route::get('/check/status', [CheckingDetailsController::class, 'checkStatus'])->name('checkStatus');

Route::post('check/status', [CheckingDetailsController::class, 'candidateStatus'])->name('candidateStatus');


// Registration
Route::get('/first-register-page', [RegistrationController::class, 'firstRegistrationPage'])
				->name('firstRegistrationPage');

Route::post('/studentFirstregistration', [RegistrationController::class, 'studentFirstRegistration'])
				->name('studentFirstRegistration');

Route::get('/second-register-page', [RegistrationController::class, 'secondRegistrationPage'])
				->name('secondRegistrationPage');

Route::post('/studentSecondregistration', [RegistrationController::class, 'studentSecondRegistration'])
				->name('studentSecondRegistration');	

Route::post('/studentImage', [RegistrationController::class, 'studentImage'])->name('studentImage');

Route::get('/confirmation', [RegistrationController::class, 'confirmation'])->name('confirmation');

//Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginStudent'])->name('loginStudent');

//Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//Verify Candidates
Route::get('/verify', [VerificationController::class, 'verify'])->name('verify');
Route::post('/verifyCandidate', [VerificationController::class, 'verifyCandidate'])->name('verifyCandidate');
Route::get('/verified', [VerifiedCandidateController::class, 'verified'])->name('verified');
Route::post('/verifiedCandidate', [VerifiedCandidateController::class, 'verifiedCandidate'])
			->name('verifiedCandidate');

//Candidate
Route::get('/first-candidate-page', [CandidateController::class, 'firstCandidatePage'])->name('firstCandidatePage');

Route::post('/firstCandidateRegistration', [CandidateController::class, 'firstCandidateRegistration'])
			->name('firstCandidateRegistration');

Route::get('/second-candidate-page', [CandidateController::class, 'secondCandidatePage'])
		->name('secondCandidatePage');

Route::post('/secondCandidateRegistration', [CandidateController::class, 'secondCandidateRegistration'])
			->name('secondCandidateRegistration');

Route::get('/third-candidate-page', [CandidateController::class, 'thirdCandidatePage'])->name('thirdCandidatePage');

Route::post('/thirdCandidateRegistration', [CandidateController::class, 'thirdCandidateRegistration'])
			->name('thirdCandidateRegistration');

			
Route::get('/candidate_confirmation', [CandidateController::class, 'candidateConfirmation'])		
			->name('candidateConfirmation');

//Voting Confirmation
		Route::get('/voting_confirmation', [VoteCandidatesController::class, 'votingConfirmation'])
					->name('votingConfirmation');			


//ROUTE PROTECTED WITH MIDDLEWARES
Route::group(['middleware' => ['auth']], function(){

		// Warning

		Route::get('/warning', [VotingController::class, 'warning'])->name('warning');
		//Vote
		Route::get('/president', [VotingController::class, 'president'])->name('president');
		Route::get('/vicePresident', [VotingController::class, 'vicePresident'])->name('vicePresident');
		Route::get('/general-secretary', [VotingController::class, 'generalSecretary'])->name('generalSecretary');
		Route::get('/treasurer', [VotingController::class, 'treasurer'])->name('treasurer');
		Route::get('/directorOfSports', [VotingController::class, 'directorOfSports'])->name('directorOfSports');
		Route::get('/directorOfSocials', [VotingController::class, 'directorOfSocials'])->name('directorOfSocials');
		Route::get('/welfare', [VotingController::class, 'welfare'])->name('welfare');

		// Vote Candidates
		Route::post('/votePresident', [VoteCandidatesController::class, 'votePresident'])->name('votePresident');

		Route::post('/voteVicePresident', [VoteCandidatesController::class, 'voteVicePresident'])
					->name('voteVicePresident');

		Route::post('/voteGeneralSecretary', [VoteCandidatesController::class, 'voteGeneralSecretary'])
					->name('voteGeneralSecretary');

		Route::post('/voteTreasurer', [VoteCandidatesController::class, 'voteTreasurer'])->name('voteTreasurer');

		Route::post('/voteDirectorOfSports', [VoteCandidatesController::class, 'voteDirectorOfSports'])
					->name('voteDirectorOfSports');

		Route::post('/voteDirectorOfSocials', [VoteCandidatesController::class, 'voteDirectorOfSocials'])
					->name('voteDirectorOfSocials');

		Route::post('/voteWelfare', [VoteCandidatesController::class, 'voteWelfare'])->name('voteWelfare');				

	});




	
Route::get('/admin-login', [AdminPagesController::class, 'adminLogin'])->name('adminLogin');

Route::post('/admin-login', [AdminPagesController::class, 'loginSystemAdmin'])->name('loginSystemAdmin');


// ALL ADMIN ROUTES
Route::group(['middleware' => ['admin']], function(){
	
		//Admin

		Route::get('/admin-dashboard', [AdminPagesController::class, 'adminDashboard'])->name('adminDashboard');

		Route::get('/admin-locksreen', [AdminPagesController::class, 'adminLockScreen'])->name('adminLockScreen');

		Route::post('/admin_lockscreen', [AdminPagesController::class, 'adminLockScreenAction'])
					->name('adminLockScreenAction');

		Route::get('/admin-logout', [AdminPagesController::class, 'adminLogout'])->name('adminLogout');

		Route::get('/admin_profile', [AdminPagesController::class, 'adminProfile'])->name('adminProfile');

		Route::post('/admin_profile/password', [AdminPagesController::class, 'updateAdminPassword'])
					->name('updateAdminPassword');

		Route::post('/admin_profile/edit', [AdminPagesController::class, 'editAdminProfile'])
					->name('editAdminProfile');			




		//Registered Student
		Route::get('/100level_students', [RegisteredStudentController::class, '_100LevelStudents'])
					->name('100LevelStudents');

		Route::get('/200level_students', [RegisteredStudentController::class, '_200LevelStudents'])
					->name('200LevelStudents');

		Route::get('/300level_students', [RegisteredStudentController::class, '_300LevelStudents'])
					->name('300LevelStudents');						

		Route::get('/400level_students', [RegisteredStudentController::class, '_400LevelStudents'])
					->name('400LevelStudents');

		Route::get('/500level_students', [RegisteredStudentController::class, '_500LevelStudents'])
					->name('500LevelStudents');

		Route::get('/registered_student/{student}-{slug}/edit', [RegisteredStudentController::class, 
					'editRegisteredStudentPage']);

		Route::post('/registered_student/{student}', [RegisteredStudentController::class, 'editRegisteredStudent'])
					->name('editRegisteredStudent');

		Route::get('/registered_student/{student}/delete', [RegisteredStudentController::class, 
					'deleteRegisteredStudent'])->name('deleteRegisteredStudent');

		//Registered Student PDF
		Route::get('/download/{student}/pdf', [RegisteredStudentPdfController::class, 'pdf']);		
		
		//Search Route		

		Route::get('/liveSearch', [LiveSearchController::class, 'search'])->name('liveSearch.action');					


		//Veified Candidates
		Route::get('/show_verified_candidate', [ShowVerifiedCandidateController::class, 'showVerifiedCandidate'])
					->name('showVerifiedCandidate');

		Route::get('/verified_candidate/{verified}/delete', [ShowVerifiedCandidateController::class, 
					'deleteVerifiedCandidate']);

		Route::get('/verified_candidate/pdf', [ShowVerifiedCandidateController::class, 'verifiedPdf']);

							


		//Registered Candidate

		Route::get('/president_candidate', [RegisteredCandidateController::class, 'presidentCandidate'])
					->name('presidentCandidate');		

		Route::get('/vice_president_candidate', [RegisteredCandidateController::class,'vicePresidentCandidate'])->name('vicePresidentCandidate');	

		Route::get('/general_secretary_candidate', [RegisteredCandidateController::class, 'secretaryCandidate'])
					->name('generalSecretaryCandidate');	

		Route::get('/treasurer_candidate', [RegisteredCandidateController::class, 'treasurerCandidate'
					])->name('treasurerCandidate');	

		Route::get('/welfare_candidate', [RegisteredCandidateController::class, 'welfareCandidate'])
					->name('welfareCandidate');	

		Route::get('/director_of_socials_candidate', [RegisteredCandidateController::class, 'dOSocialsCandidate'])
					->name('directorOfSocialsCandidate');	

		Route::get('/director_of_sports_candidate', [RegisteredCandidateController::class, 'dOSportsCandidate'])
					->name('directorOfSportsCandidate');	

		Route::get('/candidate/{candidate}-{slug}/edit', [RegisteredCandidateController::class, 'editCandidate'])
					->name('editCandidate');	

		Route::post('/candidate/{president}', [RegisteredCandidateController::class, 'editCandidateData'])
					->name('editCandidateData');

		Route::get('/candidate/{candidate}/delete', [RegisteredCandidateController::class, 'deleteCandidate']
					)->name('deleteCandidate');	

		Route::get('/candidate/{candidate}/pdf', [RegisteredCandidatePdfController::class, 'candidatePdf']);	

		Route::get('status/{id}-{slug}/{candidate}', [RegisteredCandidateController::class, 'markSuccessfulCandidate']);																																																										
					
		//System Admin
		Route::get('/view_admin', [SystemAdminController::class, 'viewAdmin'])->name('viewAdmin');

		Route::get('/add_admin', [SystemAdminController::class, 'addAdmin'])->name('addAdmin');

		Route::post('/add_admin', [SystemAdminController::class, 'addSystemAdmin'])->name('addSystemAdmin');

		Route::get('/admin/{admin}-{slug}/edit', [SystemAdminController::class, 'editAdmin']);

		Route::post('/admin/{admin}/edit', [SystemAdminController::class, 'editAdminData'])->name('editAdminData');

		Route::get('/admin/{admin}-{slug}/password', [SystemAdminController::class, 'changePassword']);

		Route::post('/admin/{admin}/password', [SystemAdminController::class, 'changeAdminPassword'])
					->name('changeAdminPassword');

		Route::get('/admin/{admin}-{slug}/delete', [SystemAdminController::class, 'deleteAdmin'])->name('deleteAdmin');			





		//Successful Candidates
		Route::get('/successful_president', [SuccessfulCandidateController::class, 'successfulPresident'])
					->name('successfulPresident');

		Route::get('/successful_vice_president', [SuccessfulCandidateController::class, 'successfulVicePresident'])
					->name('successfulVicePresident');

		Route::get('/successful_general_secretary', [SuccessfulCandidateController::class, 'successfulGeneralSecretary'])
					->name('successfulGeneralSecretary');			

		Route::get('/successful_treasurer', [SuccessfulCandidateController::class, 'successfulTreasurer'])
					->name('successfulTreasurer');

		Route::get('/successful_DOSocials', [SuccessfulCandidateController::class, 'successfulDOSocials'])
					->name('successfulDOSocials');

		Route::get('/successful_DOSports', [SuccessfulCandidateController::class, 'successfulDOSports'])
					->name('successfulDOSports');

		Route::get('/successful_welfare', [SuccessfulCandidateController::class, 'successfulWelfare'])
					->name('successfulWelfare');

		Route::get('/mail/{id}-{slug}/{candidate}', [SuccessfulCandidateController::class, 'sendCandidateMail']);	

		Route::get('admin/delete/{id}-{slug}/{candidate}', [SuccessfulCandidateController::class, 'deleteCandidate']);

		Route::get('/mail/candidates/{position}', [SuccessfulCandidateController::class, 'mailAllCandidates']);	

		Route::get('/successful/{candidate}/pdf', [SuccessfulCandidatePdfController::class, 'successfulCandidatePdf']);	

	});
	














													




		